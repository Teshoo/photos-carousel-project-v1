<template>
    <div :class="$style.buttoncontainer">
        <div 
            :class="{
                [$style.button]: true, 
                [$style.btnfirst]: true,
                [$style.btndisabled]: currentPicture.id === currentDayTrip.firstPicture -1,
            }"
            @click="firstPicture"
        >
            <img :src="chevronLeft"/><img :src="chevronLeft"/>
        </div>
        <div 
            :class="{
                [$style.button]: true, 
                [$style.btnprevious]: true,
                [$style.btndisabled]: currentPicture.id === currentDayTrip.firstPicture -1,
            }"
            @click="previousPicture"
        >
            <img :src="chevronLeft"/>
            <div>
                Previous<br/>picture
            </div>
        </div>
        <div
            :class="{
                [$style.button]: true,
                [$style.btnnext]: true,
                [$style.btndisabled]: currentPicture.id === currentDayTrip.lastPicture +1,
            }"
            @click="nextPicture"
        >
            Next<br/>picture
            <img :src="chevronRight"/>
        </div>
        <div 
            :class="{
                [$style.button]: true, 
                [$style.btnlast]: true,
                [$style.btndisabled]: currentPicture.id === currentDayTrip.lastPicture +1,
            }"
            @click="lastPicture"
        >
            <img :src="chevronRight"/><img :src="chevronRight"/>
        </div>
    </div>
</template>

<script>
    import { currentDayTrip, currentPicture } from '@/pages/main.vue';

    export default {
        name: 'picturesNavMenu',
        data() {
            return {
                currentDayTrip,
                currentPicture,
                chevronLeft: require('-/chevron-left.svg'),
                chevronRight: require('-/chevron-right.svg'),
            }
        },
        methods: {
            previousPicture() {
                if (!(currentPicture.id === currentDayTrip.firstPicture -1))
                {
                    currentPicture.id--;
                }
            },
            nextPicture() {
                if (!(currentPicture.id === currentDayTrip.lastPicture +1))
                {
                    currentPicture.id++;
                }
            },
            firstPicture() {
                if (!(currentPicture.id === currentDayTrip.firstPicture -1))
                {
                    currentPicture.id = currentDayTrip.firstPicture - 1;
                }
            },
            lastPicture() {
                if (!(currentPicture.id === currentDayTrip.lastPicture +1))
                {
                    currentPicture.id = currentDayTrip.lastPicture + 1;
                }
            },
        },
    }
</script>

<style lang="scss" module>
    .buttoncontainer {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        gap: 10px;
        justify-items: center;
        justify-self: center;
        width: 250px;
        height: 50px;
    }
    .button {
        display: grid;
        grid-template-columns: auto auto;
        align-items: center;
        justify-content: space-evenly;

        color: white;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-size: 16px;
        font-weight: bold;
        
        width: 100px;
        height: 50px;
        box-sizing: border-box;

        border-radius: 5px;
        background-color: rgb(34, 117, 113);

        cursor: pointer;
    }
    .button:hover {
        background-color: rgb(37, 131, 126);
        
    }
    .button:active {
        box-shadow: none;
    }
    .btnprevious {
        text-align: left;
        padding-right: 10px;
        
        box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.2);
    }
    .btnnext {
        text-align: right;
        padding-left: 10px;
        
        box-shadow: -2px 2px 2px 2px rgba(0, 0, 0, 0.2);
    }
    .btndisabled {
        background-color: grey;
        box-shadow: none;
    }
    .btndisabled:hover {
        background-color: grey;

        cursor: not-allowed;
    }
    .btnfirst {
        width: auto;
        
        box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.2);
    }
    .btnlast {
        width: auto;

        box-shadow: -2px 2px 2px 2px rgba(0, 0, 0, 0.2);
    }

</style>