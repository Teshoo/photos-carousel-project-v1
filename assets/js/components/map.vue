<template>
  <div v-if="!(pictures.length === 0)" :class="$style.mapcontainer">
    <l-map
      ref="map"
      v-model:zoom="zoom"
      :minZoom="7"
      :maxZoom="18"
      :zoomAnimation="true"
      :center="[latcenterUpdate(), lngcenterUpdate()]"

      :inertia="true"
      :inertiaDeceleration="30000"
      :easeLinearity="0.1"
    >
      <l-tile-layer
        :url="url"
        layer-type="base"
        name="OpenStreetMap"
      ></l-tile-layer>
      <l-marker v-for="hideout in hideouts" :key="hideout.id" :lat-lng="[hideout.lat, hideout.lng]" :z-index-offset="400">
        <l-icon
          :icon-url="shelterMarker"
          :icon-size="[30,30]"
        >
        </l-icon>
      </l-marker>
      <div v-for="picture in pictures" :key="picture.id" @click="updateCurrentPicture(picture.id)">
        <l-marker v-if="picture.id === currentPicture.id" :lat-lng="[picture.lat, picture.lng]" :z-index-offset="1000">
          <l-icon 
            :icon-url="currentMarker"
            :icon-size="[25,25]"
          ></l-icon>
        </l-marker>
        <l-marker v-else-if="picture.id < currentPicture.id" :lat-lng="[picture.lat, picture.lng]" :z-index-offset="1500" @click="updateCurrentPicture(picture.id)">
          <l-icon 
            :icon-url="marker"
            :icon-size="[15,15]"
          ></l-icon>
        </l-marker>
        <l-marker v-else-if="picture.id > currentPicture.id" :lat-lng="[picture.lat, picture.lng]" :z-index-offset="500" :visible="false">
          <l-icon 
            :icon-url="marker"
            :icon-size="[20,20]"
          ></l-icon>
        </l-marker>
      </div>
      <l-polyline 
        v-for="(picture, index) in pictures"
        :lat-lngs="[[setFirstPolylineLat(pictures,index),setFirstPolylineLng(pictures,index)],[picture.lat, picture.lng]]"
        :color="polylineColor"
        :opacity="1"
        :visible="polylineVisibility(picture)"
        :dash-array="'1 4'"
        :dash-offset="'20'"
      >
      </l-polyline>
      <l-marker v-for="picture in allPictures" :key="picture.id" :visible="previousPolylineVisibility(picture)" :lat-lng="[picture.lat, picture.lng]" :z-index-offset="300">
        <l-icon
          :icon-url="inactiveMarker"
          :icon-size="[10,10]"
        >
        </l-icon>
      </l-marker>
      <l-polyline 
        v-for="(picture, index) in allPictures"
        :lat-lngs="[[setFirstPolylineLat(allPictures,index),setFirstPolylineLng(allPictures,index)],[picture.lat, picture.lng]]"
        color="grey"
        :opacity="1"
        :visible="previousPolylineVisibility(picture)"
        :dash-array="'1 4'"
        :dash-offset="'20'"
      >
      </l-polyline>
    </l-map>
  </div>
</template>

<script>
  import "leaflet/dist/leaflet.css"
  import { LMap, LTileLayer, LMarker, LPolyline, LTooltip, LCircleMarker, LIcon} from "@vue-leaflet/vue-leaflet";
  import { currentTrip, currentPicture, currentDayTrip } from '@/pages/main.vue';
  import { fetchPictures } from '@/services/pictures-service.js';
  import { fetchHideouts } from '@/services/hideouts-service.js';
  import { fetchTripPictures } from '@/services/tripsPictures-service.js';

  export default {
    name: 'Map',
    components: {
      LMap,
      LTileLayer,
      LMarker,
      LPolyline,
      LTooltip,
      LCircleMarker,
      LIcon,
    },
    data() {
      return {
        url: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
        zoom: 16,
        polylineColor: '#FF5470',

        center: [37.80288, 128.876855],

        pictures: [],
        hideouts: [],
        currentPicture,
        currentDayTrip,
        currentTrip,
        allPictures: [],

        marker: require('-/marker.svg'),
        currentMarker: require('-/currentMarker.svg'),
        inactiveMarker: require('-/inactiveMarker.svg'),
        shelterMarker: require('-/shelterMarker.svg'),
      };
    },
    watch: {
      'currentDayTrip.iri': {
        handler() {
          this.updatePictures();
          this.browseHideouts();
        }
      },
      'currentTrip.iri': {
        handler() {
          this.browseAllTripPictures();
        }
      },
    },
    methods: {
      async browseAllTripPictures() {
        try {
          const response = await fetchTripPictures(currentTrip.iri);
          this.allPictures = response.data['hydra:member'];
        }
        catch (err) {
          console.log(err);
        }
      },
      async updatePictures() {
        try {
          const response = await fetchPictures(currentDayTrip.iri);
          this.pictures = response.data['hydra:member'];
        }
        catch (err) {
          console.log(err);
        }
      },
      async browseHideouts() {
        try {
          const response = await fetchHideouts(currentDayTrip.iri);
          this.hideouts = response.data['hydra:member'];
        }
        catch (err) {
          console.log(err);
        }
      },
      displayAllPolylines() {

      },
      latcenterUpdate() {
        var zoom = this.calculateRightZoom();
        if (this.pictures && !(currentDayTrip.firstPicture === currentPicture.id +1 || currentDayTrip.lastPicture === currentPicture.id -1)) {
          var latitude = 0;
          this.pictures.forEach(element => {
            if (element.id === currentPicture.id)
              latitude = Number(element.lat)
          });
          return latitude;
        } else {
          setTimeout(() => this.zoom = zoom, 300);
          console.log(this.zoom);
          return this.centerLat();
        }
        
      },
      lngcenterUpdate() {
        if (this.pictures && !(currentDayTrip.firstPicture === currentPicture.id +1 || currentDayTrip.lastPicture === currentPicture.id -1)) {
          var longitude = 0;
          this.pictures.forEach(element => {
            if (element.id === currentPicture.id)
              longitude = Number(element.lng)
          });
          return longitude;
        } else {
          return this.centerLng();
        }

      },
      topDayTripLat() {
        var topLat = Number(this.pictures[0].lat);

        this.pictures.forEach(element => {
          if (topLat < Number(element.lat)) {
            topLat = Number(element.lat);
          }
        });
        return topLat;
      },
      bottomDayTripLat() {
        var bottomLat = Number(this.pictures[0].lat);

        this.pictures.forEach(element => {
          if (bottomLat > element.lat) {
            bottomLat = Number(element.lat);
          }
        });
        return bottomLat;
      },
      rightDayTripLat() {
        var rightLng = Number(this.pictures[0].lng);

        this.pictures.forEach(element => {
          if (rightLng < Number(element.lng)) {
            rightLng = Number(element.lng);
          }
        });
        return rightLng;
      },
      leftDayTripLat() {
        var leftLng = Number(this.pictures[0].lng);

        this.pictures.forEach(element => {
          if (leftLng > Number(element.lng)) {
            leftLng = Number(element.lng);
          }
        });
        return leftLng;
      },
      calculateRightZoom(){
        var zoom = 0;
        var latamplitude = this.topDayTripLat() - this.bottomDayTripLat();
        var lngamplitude = this.rightDayTripLat() - this.leftDayTripLat();
        console.log('lat: '+ latamplitude);
        console.log('lng: '+ lngamplitude);

        if (latamplitude < 0.0025 && lngamplitude < 0.0025) {
          zoom = 18;
        } else if (latamplitude < 0.005 && lngamplitude < 0.005) {
          zoom = 17;
        } else if (latamplitude < 0.01 && lngamplitude < 0.01) {
          zoom = 16;
        } else if (latamplitude < 0.02 && lngamplitude < 0.02) {
          zoom = 15;
        } else if (latamplitude < 0.04 && lngamplitude < 0.04) {
          zoom = 14;
        } else if (latamplitude < 0.08 && lngamplitude < 0.08) {
          zoom = 13;
        } else if (latamplitude < 0.16 && lngamplitude < 0.16) {
          zoom = 12;
        } else if (latamplitude < 0.32 && lngamplitude < 0.32) {
          zoom = 11;
        } else {
          zoom = 10
        }
        return zoom;
      },
      centerLat() {
        return (this.topDayTripLat() + this.bottomDayTripLat())/2;
      },
      centerLng() {
        return (this.rightDayTripLat() + this.leftDayTripLat())/2;
      },
      //useless atm
      barycentreLat() {
        var latBary = 0;
        this.pictures.forEach(element => {
          latBary = latBary+Number(element.lat);
        });
        return latBary/this.pictures.length;
      },
      //useless atm
      barycentreLng() {
        var lngBary = 0;
        this.pictures.forEach(element => {
          lngBary = lngBary+Number(element.lng);
        });
        return lngBary/this.pictures.length;
      },
      setFirstPolylineLat(pictures, index) {
        var previousIndex = index-1;
        if (index > 0 && pictures[previousIndex].dayTrip === pictures[index].dayTrip) {
          var previousPictureLat = pictures[previousIndex].lat
          return previousPictureLat;
        }
        else {
          return pictures[index].lat;
        }
      },
      setFirstPolylineLng(pictures, index) {
        var previousIndex = index-1;
        if (index > 0 && pictures[previousIndex].dayTrip === pictures[index].dayTrip) {
          var previousPictureLng = pictures[previousIndex].lng
          return previousPictureLng;
        }
        else {
          return pictures[index].lng;
        }
      },
      polylineVisibility(picture) {
        if (picture.id <= currentPicture.id) {
          return true;
        }
        else {
          return false;
        }
      },
      previousPolylineVisibility(picture) {
        if (picture.id < currentDayTrip.firstPicture) {
          return true;
        } else {
          return false;
        }
      },
      updateCurrentPicture(pictureId) {
        currentPicture.id = pictureId;
      },
    },
  };
</script>

<style lang="scss" module>
  .mapcontainer {
    position: sticky;
    align-self: flex-start;
    top: 200px;

    height: 75vh;
    width: 100%;

    border-radius: 10px;
    overflow: hidden;
  }
</style>