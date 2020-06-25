<template>
    <div class="home-noticias-area mt-24">
        <div class="container">
            <div class="titulo text-center" v-if="vermas">
                <h3> Proyectos </h3>
            </div>
            <div class="row  mt-24">
                <div class="col-md-4 col-sm-12 col-xs-12" v-for="(proyecto, index) in proyectos" :key="index">
                    <div class="card-noticias mb-4 o-hidden default-bg"><img class="card-noticias-img-top" :src="proyecto.urlBanner" alt="">
                        <div class="card-noticias-body ">
                            <h5 class="card-noticias-title"><url-link :info="proyecto" :nombre="'proyecto_show'" v-text="proyecto.title"></url-link></h5>
                            <p class="card-noticias-text text-gray hidden-sm hidden-xs" v-text="proyecto.excerpt"></p>
                            <url-link :info="proyecto" :name="'proyecto_show'"  class="vermas hidden-sm hidden-xs">Ver mas</url-link>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" v-if="vermas">
                <div class="vertodos col-xs-12">
                    <!-- <router-link :to="{ name: 'proyectos' }" >Ver todas</router-link> -->
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props:['proyectos', 'vermas'],
    
    mounted() {
    },
}
</script>