<template>
    <div>
        <banner-area :page="estrategia" :img="img"/>
        <div class="inversiones-area mtb-80">
            <div class="container">
                <div class="row default-bg">
                    <div class="col-md-4 col-sm-12">
                        <div class="inversiones-img hidden-sm hidden-xs">
                            <img :src="estrategia.urlimage" alt="about">
                        </div>
                        <div class="inversiones-img hidden-lg hidden-md " vel>
                            <img class="img-responsive" src="img/quehacemos/328x220-mobile.png" alt="img">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="inversiones-content">
                            <h2 class="title f32" v-text="estrategia.title"></h2>
                            <div class="contenido-text default" v-html="estrategia.body"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-8">
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
                console.log(res);
                this.estrategia = res.data.post;
                this.proyectos = res.data.proyectos;
                this.img = this.smallScreen(this.estrategia.urlBanner, this.estrategia.urlBannerMobile);
                $('#lock').addClass('hidden');
                console.log(this.proyectos);
            })
            .catch(err =>{
                console.log(err.response.data);
            });
        }
    }
</script>