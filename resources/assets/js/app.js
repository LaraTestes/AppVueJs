
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'


//
import VueMaterial from 'vue-material'

import 'vue-material/dist/vue-material.css'

Vue.use(VueMaterial)


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



Vue.component('example', require('./components/Example.vue'));


let wall = require('./components/wall.vue');

let cabecalho = require('./components/cabecalho.vue');

let left = require('./components/menu.vue');

let right = require('./components/right.vue');

let duvida = require('./components/duvida.vue');


const app = new Vue({
    el: '#app',

    components:{cabecalho, wall, left, right, duvida}

});
