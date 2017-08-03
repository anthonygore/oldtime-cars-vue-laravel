<template>
    <div>
        <h1>Oldtime Cars</h1>
        <div v-for="car in cars">
            <router-link :to="'/detail/' + car.id">
                <img :src="car.url">
                <h4>{{ car.name }}</h4>
            </router-link>
        </div>
    </div>
</template>
<script>
    import mixin  from '../mixin';

    export default {
        mixins: [ mixin ],
        data() {
            return {
                cars: null
            }
        },
        methods: {
            setData(data) {
                this.cars = data.cars;
            }
        }
    };
</script>
