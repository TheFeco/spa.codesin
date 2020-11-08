<template>
    <div class="home-noticias-area mt-24">
        <div class="container">
            <div class="titulo text-center">
                <h3> Posicionamiento</h3>
            </div>
            <div class="row  mt-24">
                <div class="col-md-4 col-sm-12 col-xs-12" v-for="(info, index) in data" :key="index">
                    <div class="card-noticias mb-4 o-hidden default-bg"><img class="card-noticias-img-top" :src="info.urlBanner" alt="">
                        <div class="card-noticias-body ">
                            <h5 class="card-noticias-title"><noticia-link :noticia="info" v-text="info.title"></noticia-link></h5>
                            <p class="card-noticias-text text-gray hidden-sm hidden-xs" v-text="info.excerpt"></p>
                            <noticia-link :noticia="info" class="vermas hidden-sm hidden-xs">Ver más</noticia-link>
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
    props:['data', 'vermas']
}
</script>