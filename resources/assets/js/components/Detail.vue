<template>
    <div>
        <h1>{{ name }}</h1>
        <img v-bind:src="url">
        <h4>{{ price }}</h4>
        <router-link to="/">Home</router-link>
    </div>
</template>
<script>
    import mixin  from '../mixin';

    export default {
        mixins: [ mixin ],
        data() {
            return {
                name: null,
                url: null,
                price: null
            }
        }
    };
</script>
