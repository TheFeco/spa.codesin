import Vue from 'vue';
import Router from 'vue-router';

Vue.use(Router);

export default new Router({
    routes: [
        {
            path: '/',
            name: 'home',
            component: require('../views/Home')
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
            path: '/noticias',
            name: 'noticias',
            component: require('../views/Noticias'),
            props: true
        },
        {
            path: '/tags/:url',
            name: 'tags_posts',
            component: require('../views/tags_posts'),
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