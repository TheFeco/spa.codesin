<template>
    <div>
        <!-- About Inicio -->
        <div class="cc-area mt-24">
            <div class="container">
                <div class="title f32 text-center">
                    <div>Contenido de interés</div>
                </div>
                <div class="mt-24 ocultar">
                    <div class="card-ci" >
                        <div class="cards-ci" v-for="(estrategia, index) in estrategias" :key="index">
                            <div class="card-ci-img">
                                <img class="img-responsive" :src="estrategia.urlimage" alt="">
                                <div class="notice-video" v-if="estrategia.urlvideo">
                                    <div class="video-icon-c video-hover">
                                        <a class="video-popup" :href="estrategia.urlvideo">
                                            <img src="img/icons/Play.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-ci-constainer default-bg">
                                <div class="title f16 text-left">
                                    <div v-text="estrategia.title"></div>
                                </div>
                                <div class="contenedor-text t14 text-left">
                                    <div v-text="estrategia.excerpt"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="vertodos col-xs-12">
                        <div class="i" id="masTexto">Ver más</div>
                    </div>
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
                $('#lock').addClass('hidden');
			})
			.catch((err) =>{
				console.log(err);
            });
    },
    updated: function () {
    this.$nextTick(function () {
         $('.video-popup').magnificPopup({
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                zoom: {
                    enabled: true,
                },
            iframe: {
                patterns: {
                        youtube_short: {
                        index: 'https://youtu.be/',
                        id: 'youtu.be/',
                        src: '//www.youtube.com/embed/%id%?autoplay=1'
                        },
                        youtube: {
                        index: 'youtube.com/',
                        id: 'v=',
                        src: '//www.youtube.com/embed/%id%?autoplay=1'
                        }
                },
                srcAction: 'iframe_src',
            }
            });
        })
    }
}
</script>
<style>
.video-icon-c {
    left: 50%;
    position: absolute;
    top: 0%;
    transform: translate(-50%, -90%);
    z-index: 1;
}

.cc-area .notice-video { height: 0; top: -80px; }

.card-ci {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-gap: 1rem;
        grid-template-columns: repeat(3, 1fr);
    }
    .cards-ci{ 
        background-color: #FFF;
        color: #4A4A4A;
        max-height: 100%;
        max-width: 22.25rem;
    }
    .card-ci-img { height: 13.25rem; width: 100%; margin: 0;}
    .card-ci-constainer { max-height: 11.125rem; padding: 1.5rem 2rem 1.5rem 2rem; overflow: hidden; }
    .card-ci-constainer .contenedor-text { margin-top: 1rem; overflow: hidden;}
    @supports(object-fit: cover){
        .card-ci-img img{
        height: 100%;
        object-fit: cover;
        object-position: center center;
        }
        
    }
</style>