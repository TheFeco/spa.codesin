<template>
    <div class="noticias">
        <!-- Banner Area Inicio -->
        <div class="banner-area-wrapper">
            <div class="banner-area text-center visible-lg visible-md" v-bind:style="{ backgroundImage: 'url(' + noticia.urlBanner + ')' }">
            </div>
            <div class="banner-area text-center visible-sm visible-xs" v-bind:style="{ backgroundImage: 'url(' + noticia.urlBannerMobile + ')' }">
            </div>
        </div>
        <!-- Banner Area Fin -->
        <div class="noticias-detalle-area default-bg">
            <div class="container">
                <div class="col xs-12">
                    <div class="noticias tags">
                            <div class="tag c-gris" v-for="(tag, index) in post.tag" :key="index">
                                <router-link :to="{name: 'tags_posts', params: { tag: tag.rul }}"> {{ tag.name}} </router-link>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 mt-80">
                        <div class="col xs-12">
                            <div class="col xs-12" v-bind:class="[noticia.photos.length > 0 ? 'col-md-8' : '']">
                                <div class="noticia-titulo">
                                    <h1 v-text="noticia.title"></h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mt-54 col-xs-12" v-bind:class="[noticia.photos.length > 0 ? 'col-md-8' : '']">
                                    <div class="noticia-contenido" v-html="noticia.body"></div>
                                </div>
                                <div class="mt-54 col-xs-12 col-md-4" v-bind:class="[noticia.photos.length <= 0 ? 'hidden' : '']">
                                    <div v-for="(photo, index) in noticia.photos" :key="index">
                                        <div class="col-md-12 mb-10">
                                            <div class="card-lg o-hidden">
                                                <img class="card-lg-img" :src="'/'+photo.url" alt="noticia">
                                            </div>
                                        </div>                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['url'],
        data(){
            return{
                noticia:[],
                post: {
                    owner:'',
                    category:''
                }
            }
        },
        mounted() {
            axios.get(`/api/noticia/${this.url}`)
            .then(res =>{
                this.noticia = res.data;
            })
            .catch(err =>{
                console.log(err.response.data);
            });
        }
    }
</script>
