import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './components/Home.vue';
import Detail from './components/Detail.vue';

const router = new VueRouter({
    mode: 'history',
    routes: [
        { path: '/', component: Home },
        { path: '/detail/:id', component: Detail }
    ]
});

const app = new Vue({
    el: '#app',
    router
});
