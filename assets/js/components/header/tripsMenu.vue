<template>
    <div :class="$style.container">
        <select 
            :class="$style.select" 
            v-model="currentTrip.iri" 
            :trips="trips"
        >
            <option
                v-for="(trip, index) in trips"
                :value="trip['@id']"
                :class="$style.select"
            >
                {{ (index + 1) }} - {{ trip.name }}
            </option>
        </select>
    </div>
</template>

<script>
    import { currentTrip, currentDayTrip, currentPicture } from '@/pages/main.vue';
    import { fetchTrips } from '@/services/trips-service.js'

    export default {
        name: 'tripsMenu',
        data() {
            return {
                currentTrip,
                currentDayTrip,
                currentPicture,
                trips: [],
            }
        },
        watch: {
            'currentTrip.iri': {
                handler() {
                    this.updateCurrentTrip();
                },
            },
        },
        methods: {
            updateCurrentTrip() {
                this.trips.forEach(element => {
                    if (element['@id'] === currentTrip.iri)
                    {
                        currentTrip.name = element.name;
                        currentTrip.id = element.id;
                    }
                });
            }
        },
        async created() {
            const response = await fetchTrips();
            this.trips = response.data['hydra:member'];

            currentTrip.id = this.trips[0].id;
            currentTrip.iri = this.trips[0]['@id'];
            currentTrip.name = this.trips[0].name;
        },
    }
</script>
    
<style lang="scss" module>
    .container {
        display: grid;
        grid-template-columns: auto;
        align-items: center;
        justify-items: center;
        width: 200px;
        justify-self: center;
    }
    .select {
        width: 100%;
        height: 40px;
        padding-left: 15px;

        background-color: rgb(34, 117, 113);

        color: white;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-size: 16px;
        font-weight: bold;

        border: none;
        border-radius: 5px;
    }
</style>