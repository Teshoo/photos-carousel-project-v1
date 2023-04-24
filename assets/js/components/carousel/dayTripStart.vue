<template>
    <div
        :class="{
            [$style.daytripstart]: true,
            [scrollToDayTripStart()]: currentDayTrip.firstPicture === currentPicture.id -1,
        }"
        ref="dayTripStartRef"
    >
        <div :class="$style.daytriptitle">
                {{ currentDayTrip.name }}
        </div>
        <div
            :class="$style.daytripstartbtn"
            @click="startCaroussel"
        >
            Let's go
        </div>
    </div>
</template>

<script>
    import { currentPicture, currentDayTrip } from '@/pages/main.vue';

    export default {
        name: 'dayTripStart',
        data() {
            return {
                currentPicture,
                currentDayTrip
            };
        },
        methods: {
            scrollToDayTripStart() {
                if (!(this.$refs.dayTripStartRef === undefined))
                {
                    if (currentDayTrip.firstPicture -1 === currentPicture.id)
                    {
                        this.$refs.dayTripStartRef.scrollIntoView({behavior: 'smooth', block: 'start'});
                    }
                }
            },
            startCaroussel() {
                currentPicture.id++;
            },
        },
    }
</script>

<style lang="scss" module>
    .daytripstart {
        display: grid;
        grid-template-columns: auto;
        align-content: space-evenly;
        justify-items: center;

        z-index: 100;

        box-shadow: 0px 10px 10px 0px rgb(22, 23, 36);

        height: 75vh;

        background-color: rgb(84, 151, 90);
        color: white;
    }

    .daytriptitle {
        text-align: center;
        font-size: 40px;
    }
    .daytripstartbtn {
        display: grid;
        grid-template-columns: auto;
        align-content: center;
        justify-content: center;

        height: 100px;
        width: 200px;

        border-radius: 20px;
        box-shadow: 0px 3px 5px 5px rgba(0, 0, 0, 0.2);
        background-color: rgb(255, 255, 255);

        font-size: 30px;
        color: rgb(84, 151, 90);

        cursor: pointer;
    }
    .daytripstartbtn:hover {
        background-color: rgb(241, 241, 241);
    }
</style>