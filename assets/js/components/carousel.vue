<template>
    <div :class="$style.container">
        <day-trip-start-component/>
        <div 
            v-for="picture in pictures"
            :class="$style.component"
        >
            <picture-component :picture="picture" :temperature="setPictureTemperature(picture.shotTime)" :key="picture['@id']" />
        </div>
        <day-trip-end-component/>
    </div>
</template>

<script>
    import PictureComponent from '@/components/carousel/picture.vue';
    import DayTripStartComponent from '@/components/carousel/dayTripStart.vue';
    import DayTripEndComponent from '@/components/carousel/dayTripEnd.vue';
    import { currentPicture, currentDayTrip } from '@/pages/main.vue';
    import { fetchPictures } from '@/services/pictures-service.js';
    import { fetchDayTemperature } from '@/services/temperature-service.js';

    export default {
        name: 'Carousel',
        components: {
            PictureComponent,
            DayTripStartComponent,
            DayTripEndComponent
        },
        data() {
            return {
                currentPicture,
                currentDayTrip,
                pictures: [],
                temperatures: [],
            }
        },
        watch: {
            'currentDayTrip.iri': {
                handler() {
                    this.updatePicturesTemperatures();
                }
            },
        },
        methods: {
            async updatePicturesTemperatures() {
                try {
                    const response = await fetchPictures(currentDayTrip.iri);
                    this.pictures = response.data['hydra:member'];
                    
                    currentPicture.id = (this.pictures[0].id) -1;
                    currentPicture.iri = this.pictures['@id'];
                
                    const lastPicturesIndex = Object.keys(this.pictures)[Object.keys(this.pictures).length-1];

                    currentDayTrip.firstPicture = this.pictures[0].id;
                    currentDayTrip.nbPictures = this.pictures.length;
                    currentDayTrip.lastPicture = this.pictures[lastPicturesIndex].id;
                }
                catch (err) {
                    console.log(err);
                }
                try {
                    const lat = (this.topDayTripLat() + this.bottomDayTripLat())/2;
                    const lng = (this.rightDayTripLat() + this.leftDayTripLat())/2;
                    const response = await fetchDayTemperature(currentDayTrip.date, lat, lng);
                    this.temperatures = response.data.hourly;
                    console.log(this.temperatures);
                }
                catch (err) {
                    console.log(err);
                }
            },
            // need to add day+1 temperatures
            setPictureTemperature(pictureDate) {
                const picHour = Number(pictureDate.substring(11,13));
                return this.temperatures.temperature_2m[picHour];
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
        },
    };
</script>

<style lang="scss" module>
    .container {
        display: grid;
        grid-template-columns: 1fr;

        height: 75vh;

        overflow: hidden;
        box-sizing: border-box;
        border-radius: 10px;
        
        background-color: rgb(42, 44, 66);
    }
    .container:before {
        height: 75vh;
        top: 0px;
        box-shadow: inset 0px 10px 10px 0px rgba(22, 23, 36), inset 0px -10px 10px 0px rgb(22, 23, 36);
        content: '';
        position: sticky;
    }
    .component {
        display: grid;
        grid-template-columns: auto;
        justify-items: center;
        align-items: center;
    }
</style>