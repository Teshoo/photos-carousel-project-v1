<template>
    <div :class="$style.container">
        <select 
            :class="$style.select" 
            v-model="currentDayTrip.iri" 
            :dayTrips="dayTrips"
        >
            <option
                v-for="dayTrip in dayTrips"
                :value="dayTrip['@id']"
                :class="$style.select"
            >
                {{ dayTrip.name }}
            </option>
        </select>
    </div>
</template>

<script>
    import { currentTrip, currentDayTrip, currentPicture } from '@/pages/main.vue';
    import { fetchDayTrips } from '@/services/dayTrips-service.js'

    export default {
        name: 'dayTripsMenu',
        data() {
            return {
                currentTrip,
                currentDayTrip,
                currentPicture,
                dayTrips: [],
            }
        },
        watch: {
            'currentTrip.iri': {
                handler() {
                    this.updateDayTrips();
                }
            },
            'currentDayTrip.iri': {
                handler() {
                    this.updateCurrentDayTrip();
                },
            },
        },
        methods: {
            async updateDayTrips() {
                try {
                    const response = await fetchDayTrips(currentTrip.iri);
                    this.dayTrips = response.data['hydra:member'];

                    if (!(this.dayTrips[0] === undefined))
                    {
                        currentDayTrip.id = this.dayTrips[0].id;
                        currentDayTrip.iri = this.dayTrips[0]['@id'];
                        currentDayTrip.name = this.dayTrips[0].name;
                        currentDayTrip.date = this.dayTrips[0].date;
                        currentDayTrip.firstPicture = this.dayTrips[0].id;
                        currentDayTrip.lastPicture = this.dayTrips[0].id + this.dayTrips.length;
                    }

                    this.dayTrips.forEach(element => {
                        currentTrip.dayTrips.push(element['@id']);
                    })
                }
                catch (err) {
                    console.log(err);
                }
            },
            updateCurrentDayTrip() {
                this.dayTrips.forEach(element => {
                    if (element['@id'] === currentDayTrip.iri)
                    {
                        currentDayTrip.name = element.name;
                        currentDayTrip.id = element.id;
                        currentDayTrip.date = element.date;
                        console.log(currentDayTrip.date);
                    }
                })
            }
        },
    }
</script>
    
<style lang="scss" module>
    .container {
        display: grid;
        grid-template-columns: auto;
        align-items: center;
        justify-items: center;
        width: 300px;
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