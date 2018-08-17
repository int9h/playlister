
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueResource from 'vue-resource'
import VueRouter from 'vue-router'
import VueSweetAlert from 'vue-sweetalert'

Vue.use(VueResource)
Vue.use(VueRouter)
Vue.use(VueSweetAlert)

import Home from './components/Home'
import About from './components/About'
import PageNotFound from './components/PageNotFound'
import Player from './components/Player'

const routes = [
    { path: '/', component: Home },
    { path: '/about', component: About },
    { path: '/play/:hash', component: Player },
    { path: '*', component: PageNotFound }
]

const router = new VueRouter({
    mode: 'history',
    routes: routes
});

const app = new Vue({
    router
}).$mount('#app')