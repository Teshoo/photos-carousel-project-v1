<template>
    <div 
        :id="picture.id"
        :class="$style.container"
        ref="pictureRef"
    >
        <img
            :class="{
                [$style.picture]: true,
                [$style.currentpicture]: 
                    picture.id === currentPicture.id 
                    || (picture.id === currentPicture.id +1 && currentDayTrip.firstPicture === currentPicture.id +1)
                    || (picture.id === currentPicture.id -1 && currentDayTrip.lastPicture === currentPicture.id -1),
                [scrollToPicture()]: picture.id === currentPicture.id,
            }" 
            :src="'http://localhost:8000/build/images/'+picture.url"
            :title="picture.time"
            :key="picture['@id']"
        >
        <div v-show="picture.id === currentPicture.id || (picture.id === currentPicture.id +1 && currentDayTrip.firstPicture === currentPicture.id +1)"
            :class="$style.pictureinfos">
            {{ displayHour(picture.shotTime) }} _ {{ temperature }}°C<br/>
            {{ picture.name }}
            
        </div>
    </div>
</template>

<script>
    import { currentPicture, currentDayTrip } from '@/pages/main.vue';

    export default {
        name: 'Picture',
        props: {
            picture: {
                type: Object,
                required: true,
            },
            temperature: {
                type: Number,
                required: false,
            }
        },
        data() {
            return {
                currentPicture,
                currentDayTrip
            };
        },
        methods: {
            scrollToPicture() {
                if (!(this.$refs.pictureRef === undefined))
                {
                    if (this.picture.id === currentPicture.id)
                    {
                        this.$refs.pictureRef.scrollIntoView({behavior: 'smooth', block: 'nearest'});
                    }
                }
            },
            displayHour(pictureShotTime) {
                return (pictureShotTime.substring(11,13))+'h'+pictureShotTime.substring(14,16);
            },
        }
    }
</script>

<style lang="scss" module>
    .container {
        display: grid;
        grid-template-columns: auto;
        justify-items: center;
        padding-bottom: 50px;
        padding-top: 50px;
        box-sizing: border-box;
    }
    .picture {
        width: 30%;
        transition: width 1s, border-radius 1s;
        max-height: 60vh;

        border-radius: 300px;
        box-sizing: content-box;
    }
    .currentpicture {
        width: 95%;
        max-height: 55vh;
        
        transition: width 1s, border-radius 1s;

        border-radius: 50px;
    }
    .pictureinfos {
        padding: 10px;
        background-color: rgb(59, 62, 92);
        transition: height 1s;
        border-radius: 0 0 10px 10px;

        text-align: center;
        line-height: 25px;
    }
</style>