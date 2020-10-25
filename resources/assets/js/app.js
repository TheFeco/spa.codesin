/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue';
import carousel from 'vue-owl-carousel';
window.Vue = require('vue');

import router from './routes/routes';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component('nav-bar', require('./components/navBarv2'));
Vue.component('noticia-link', require('./components/noticiaLink'));
Vue.component('url-link', require('./components/urlLink'));
Vue.component('tags-link', require('./components/tagsLink'));
Vue.component('proyectos-link', require('./components/proyectosLink'));
Vue.component('proyecto-link', require('./components/proyectoLink'));
Vue.component('noticias-area', require('./components/noticiasArea'));
Vue.component('politicas-area', require('./components/politicasArea'));
Vue.component('banner-area', require('./components/banner'));
Vue.component('proyectos-area', require('./components/proyectosArea'));
Vue.component('staff-area', require('./components/staffEstatal'));
Vue.component('zonas-area', require('./components/Zonas'));
Vue.component('carousel',carousel);

Vue.mixin({
    data() {
        return {
            loading: false,
            facebook: "http://www.facebook.com/pages/Codesin-Sinaloa/218834188212830?fref=ts",
            twitter : "http://twitter.com/codesin",
            youtube: "https://www.youtube.com/user/Cod351n/videos"

        }
    },
    methods: {
        gMixinFun: function() {
        return "this is a mixin test"
        },
        load: function(){
            console.log('cargando');
            this.loading = !this.loading;
            console.log(this.loading);
        },
        smallScreen: function(desktop,mobile){
            let imagen;
            if(window.innerWidth < 767){
                
                imagen = mobile ? mobile : '/img/default/banner.jpg';

            }else{

                imagen = desktop ? desktop : '/img/default/banner.jpg';
            }

            return imagen;
        },
    },
    mounted() {
        let windows = $(window);
        let stick = $('.header-area');
        windows.on('scroll',function(){
            let scroll = windows.scrollTop();
            if(scroll < 5){
                stick.removeClass('sticky');
            }else{
                stick.addClass('sticky');
            }
        });
    },
});
const app = new Vue({
    el: '#app',
    router
});