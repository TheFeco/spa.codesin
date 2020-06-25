<template>
    <div>
        <!-- About Inicio -->
        <div class="cc-area mtb-70">
            <div class="container">
                <div class="row">
                    <div class="sm-12 titulo text-center mb-60">
                        <h3>Estrategias {{estrategias.length}}</h3>
                    </div>
                </div>
                <div class="row  mt-24">
                    <div class="col-md-3 col-sm-12 col-xs-12" v-for="(estrategia, index) in estrategias" :key="index">
                        <div class="card-staff mb-4 o-hidden default-bg">
                            <img class="card-staff-img-top" :src="estrategia.urlimage" alt="">
                            <div class="notice-video" v-if="estrategia.urlvideo">
                                <div class="video-icon video-hover">
                                    <a class="video-popup" :href="estrategia.urlvideo">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-staff-body ">
                                <h5 class="card-staff-title text-center"><p v-text="estrategia.title"></p></h5>
                                <p class="card-staff-text text-gray text-center" v-text="estrategia.excerpt"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="vertodos col-xs-12">
                    <router-link :to="{ name: 'noticias' }" >Ver todas</router-link>
                </div>
            </div>
        </div>
        <!-- NOTICIAS -->
		<noticias-area :noticias="noticias" />
    </div>
</template>
<script>
export default {
    data() {
        return {
            estrategias: [],
            noticias: [],
            BotonText: 'ver todos los videos',
            show:false
            
        }
    },
    mounted() {
        axios.get('/api/comunicacion')
			.then((res) => {
                console.log(res);
                this.noticias = res.data.noticias;
                this.estrategias = res.data.contenidoInsteres;
			})
			.catch((err) =>{
				console.log(err);
            });
    },
}
</script>
<style>
.cc-area .notice-video { height: 0; top: -80px; }
</style>