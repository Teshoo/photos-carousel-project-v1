<template>
    <div
        :class="{
            [$style.daytripend]: true,
            [scrollToDayTripEnd()]: currentDayTrip.lastPicture === currentPicture.id +1,
        }"
        ref="dayTripEndRef"
    >
        <div :class="$style.daytriptitle">
            {{ currentDayTrip.name }}
        </div>
        <div
            :class="$style.daytripnavbtn"
            @click="nextDayTrip"
        >
            Next trip
        </div>
    </div>
</template>

<script>
    import { currentPicture, currentDayTrip } from '@/pages/main.vue';

    export default {
        name: 'dayTripEnd',
        data() {
            return {
                currentPicture,
                currentDayTrip
            };
        },
        methods: {
            scrollToDayTripEnd() {
                if (!(this.$refs.dayTripEndRef === undefined))
                {
                    if (currentDayTrip.lastPicture +1 === currentPicture.id)
                    {
                        this.$refs.dayTripEndRef.scrollIntoView({behavior: 'smooth', block: 'end'});
                    }
                }
            },
            nextDayTrip() {
                currentDayTrip.id++;
                currentDayTrip.iri = '/api/day_trips/' + currentDayTrip.id;
            }
        },
    }
</script>

<style lang="scss" module>
    .daytripend {
        display: grid;
        grid-template-columns: auto;
        align-content: space-evenly;
        justify-items: center;

        z-index: 100;

        box-shadow: 0px -10px 10px 0px rgb(22, 23, 36);

        height: 75vh;

        background-color: rgb(155, 86, 86);
        color: white;
    }
    .daytriptitle {
        text-align: center;
        font-size: 40px;
    }
    .daytripnavbtn {
        display: grid;
        grid-template-columns: auto;
        align-content: center;
        justify-content: center;

        height: 100px;
        width: 200px;

        border-radius: 20px;
        box-shadow: 0px 3px 5px 5px rgba(0, 0, 0, 0.2);
        background-color: rgb(84, 151, 90);

        font-size: 30px;

        cursor: pointer;
    }
    .daytripnavbtn:hover {
        background-color: rgb(84, 161, 90);
    }
</style>