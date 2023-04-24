<template>
    <header-component :title="title" />
    <div :class="$style.body">
        <div>
            <carousel-component />
        </div>
        <div>
            <map-component />
        </div>
    </div>
</template>
 
<script>
    import HeaderComponent from '@/components/header.vue';
    import CarouselComponent from "@/components/carousel.vue";
    import MapComponent from "@/components/map.vue";

    import { reactive } from 'vue';

    export const currentPicture = reactive({
        id: null,
        iri: null,
    })

    export const currentDayTrip = reactive({
        id: null,
        iri: null,
        name: null,
        nbPictures: null,
        firstPicture: null,
        lastPicture: null,
    })

    export const currentTrip = reactive({
        id: null,
        iri: null,
        name: null,
        dayTrips: [],
    })

    export default {
        name: 'Test',
        components: {
            HeaderComponent,
            CarouselComponent,
            MapComponent,
        },
        data() {
            return {
                title: 'Korea trip\'s pictures',
            };
        },
    };
</script>

<style lang="scss" module>
    .body {
        display: grid;
        grid-template-columns:  1fr 1fr;
        justify-content: center;
        gap: 30px;
    }
</style>