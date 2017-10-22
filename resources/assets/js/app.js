
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'


// Importacao do VueMaterial
import VueMaterial from 'vue-material'

import 'vue-material/dist/vue-material.css'

Vue.use(VueMaterial)

// Importacao do Vue-router
import VueRouter from 'vue-router'

Vue.use(VueRouter)



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



Vue.component('example', require('./components/Example.vue'));


//======================================================//
//=================Components no root ==================//
//======================================================//

let wall = require('./components/wall.vue');

let cabecalho = require('./components/cabecalho.vue');

let left = require('./components/menu.vue');

let right = require('./components/right.vue');

let duvida = require('./components/form-duvida.vue');


//======================================================//
//=========== Components no dir. opcoes-menu ===========//
//======================================================//

let duvidas = require('./components/opcoes-menu/duvidas.vue');

let artigos = require('./components/opcoes-menu/artigos.vue');

let messagens = require('./components/opcoes-menu/messagens.vue');

let explicadores = require('./components/opcoes-menu/explicadores.vue');


//========================================================//
//================== Conficurando a Rota =================//
//========================================================//

const routes = [
    { path: '/duvidas', component: duvidas },
    { path: '/artigos', component: artigos },
    { path: '/messagens', component: messagens },
    { path: '/explicadores', component: explicadores }

]


const router = new VueRouter({

    // Elimina o # antes da rota
    mode: 'history',

    routes // short for `routes: routes`

})



const app = new Vue({
    el: '#app',

    components:{cabecalho, wall, left, right, duvida}

});
