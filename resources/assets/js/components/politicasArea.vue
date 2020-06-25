<template>
    <div class="mt-24">
        <div class="container">
            <div class="row  mt-24">
                <div class="col-md-4 col-sm-6 col-xs-12" v-for="(politica, index) in politicas" :key="index">
                    <div class="card-noticias mb-24 o-hidden default-bg"><img class="card-noticias-img-top" :src="politica.urlBanner" alt="">
                        <div class="card-noticias-body ">
                            <h5 class="card-noticias-title"><noticia-link :noticia="politica" v-text="politica.title"></noticia-link></h5>
                            <p class="card-noticias-text text-gray hidden-sm hidden-xs" v-text="politica.excerpt"></p>
                            <noticia-link :noticia="politica" class="vermas hidden-sm hidden-xs">Ver politica</noticia-link>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" v-if="vermas">
                <div class="vertodos col-xs-12">
                    <router-link :to="{ name: 'noticias' }" >Ver todas</router-link>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props:['politicas', 'vermas']
}
</script>