<template>
    <div>
        <banner-area :page="estrategia" :img="img"/>
        <div class="about-area mt-80">
            <div class="container">
                <!-- <div class="row default-bg">
                    <div>
                        <div class="col-xs-12 visible-sm visible-xs">
                            <div class="inversiones-content">
                                <h2 class="title f24 text-center" v-text="estrategia.title"></h2>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="inversiones-img hidden-sm hidden-xs">
                                <img :src="estrategia.urlimage" alt="about">
                            </div>
                            <div class="inversiones-img hidden-lg hidden-md ">
                                <img class="img-responsive" :src="estrategia.urlimageMobile" alt="img">
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <div class="inversiones-content mr-80 mb-8">
                                <h2 class="title f32 mt-80 hidden-sm hidden-xs" v-text="estrategia.title"></h2>
                                <div class="contenedor-text default mt-32" v-html="estrategia.body"></div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-xs-12" :class="[ !estrategia.tags ? 'mt-80' : 'mt-54' ]">
                        <div class="col xs-8">
                            <div class="col xs-12" v-bind:class="[!estrategia.photos  ? 'col-md-8' : '']">
                                <div class="title f32 text-center">
                                    <h1 v-text="estrategia.title"></h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mt-40 col-xs-12" v-bind:class="[!estrategia.photos ? 'col-md-8' : '']">
                                    <div class="contenedor-text default mds" v-html="estrategia.body"></div>
                                </div>
                                <div class="mt-54 col-xs-12 col-md-4" v-bind:class="[estrategia.photos ? 'hidden' : '']">
                                    <div v-for="(photo, index) in estrategia.photos" :key="index">
                                        <div class="col-md-12 mb-10">
                                            <div class="card-lg o-hidden">
                                                <img class="card-lg-img" :src="'/'+photo.url" alt="estrategia">
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
        <div class="mb-8" v-if="proyectos.length > 0 ">
            <proyectos-area :proyectos="proyectos"></proyectos-area>
        </div>
        
    </div>
</template>
<script>
    export default {
        props:['url'],
        data(){
            return{
                img: '',
                estrategia:[],
                proyectos:[]
            }
        },
        mounted() {
            $('#lock').removeClass('hidden');
            axios.get(`/api/estrategias/${this.url}`)
            .then(res =>{
                this.estrategia = res.data.post;
                this.proyectos = res.data.proyectos;
                this.img = this.smallScreen(this.estrategia.urlBanner, this.estrategia.urlBannerMobile);
                $('#lock').addClass('hidden');
            })
            .catch(err =>{
                console.log(err.response.data);
            });
        }
    }
</script>