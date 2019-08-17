require('./bootstrap');
window.Vue = require('vue');

Vue.component('application', require('./App.vue').default);

import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';


Vue.use(VueRouter);
Vue.use(VueAxios, axios);


const app = new Vue({
    el: '#app',
});