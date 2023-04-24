<template >
    <div :class="$style.header">
        <div :class="$style.title">
            {{ title }}
        </div>
        <div :class="$style.menus">
            <tripsMenuComponent/>
            <dayTripsMenuComponent/>
        </div>
        <picturesNavMenuComponent/>
    </div>
</template>

<script>
    import tripsMenuComponent from '@/components/header/tripsMenu.vue';
    import dayTripsMenuComponent from '@/components/header/dayTripsMenu.vue';
    import picturesNavMenuComponent from '@/components/header/picturesNavMenu.vue';

    export default {
        name: 'Header',
        components: {
            tripsMenuComponent,
            dayTripsMenuComponent,
            picturesNavMenuComponent,
        },
        data() {
            return {
            }
        },
        props: {
            title: {
                type: String,
                required: true,
            },
        },
    };
</script>

<style lang="scss" module>
    .header {
        display: grid;
        align-content: space-around;
        box-sizing: border-box;
        
        position: sticky;
        top: 0px;

        background-color: rgb(59, 62, 92);

        height: 200px;
        padding-top: 20px;
    }
    .title {
        justify-self: center;
        font-size: 3em;
    }
    .menus {
        display: grid;
        grid-template-columns: auto auto;
        gap: 50px;
        align-content: center;
        justify-content: center;
    }
</style>