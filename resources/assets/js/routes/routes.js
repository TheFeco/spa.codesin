import Vue from 'vue';
import Router from 'vue-router';

Vue.use(Router);

export default new Router({
    routes: [
        {
            path: '/',
            name: 'home',
            component: require('../views/HomeV2')
        },
        {
            path: '/quienes-somos',
            name: 'quienes-somos',
            component: require('../views/About')
        },
        {
            path: '/que-hacemos',
            name: 'que-hacemos',
            component: require('../views/Que_hacemos')
        },
        {
            path: '/historia',
            name: 'historia',
            component: require('../views/historia')
        },
        {
            path: '/sinaloa-numeros',
            name: 'sinaloa',
            component: require('../views/Sinaloa_numeros')
        },
        {
            path: '/comunicacion',
            name: 'comunicacion',
            component: require('../views/comunicacion')
        },
        {
            path: '/noticias/:url',
            name: 'noticia_show',
            component: require('../views/noticias_show'),
            props: true
        },
        {
            path: '/estrategia/:url',
            name: 'estrategia_show',
            component: require('../views/estrategias_show'),
            props: true
        },
        {
            path: '/proyectos/:url',
            name: 'proyecto_show',
            component: require('../views/proyectos_show'),
            props: true
        },
        {
            path: '/zonas/:url',
            name: 'proyecto_zona',
            component: require('../views/proyectos_post'),
            props: true
        },
        {
            path: '/posicionamiento',
            name: 'posicionamiento',
            component: require('../views/Noticias'),
            props: true
        },
        {
            path: '/noticias',
            name: 'noticias',
            component: require('../views/Noticias'),
            props: true
        },
        {
            path: '/biblioteca',
            name: 'biblioteca',
            component: require('../views/biblioteca'),
            props: true
        },
        {
            path: '/multimedia',
            name: 'multimedia',
            component: require('../views/multimedia'),
            props: true
        },
        {
            path: '/resultado/:keywords',
            name: 'results',
            component: require('../views/resultadoPage'),
            props: true
        },
        {
            path: '/resultado/:keywords',
            name: 'resultado',
            component: require('../views/resultadoPage'),
            props: true
        },
        {
            path: '/tags/:url',
            name: 'tags_posts',
            component: require('../views/tags_posts'),
            props: true
        },
        {
            path: '/codetalks/:url',
            name: 'codetalks_show',
            component: require('../views/codetalks_show'),
            props: true
        },
        {
            path: '/sinaloaNumeros',
            name: 'sinaloaNumeros',
            component: require('../views/sinaloaNumeros'),
            props: true
        },
        {
            path: '/codetalks',
            name: 'codetalks',
            component: require('../views/codetalks'),
            props: true
        },
        {
            path: '/codesinHechos',
            name: 'codesinHechos',
            component: require('../views/codesinHechos'),
            props: true
        },
        {
            path: '*',
            component: require('../views/404')
        }
        
    ],
    linkExactActiveClass: 'active',
    mode: 'history',
    scrollBehavior(){
        return {x:0, y:0}
    }
});