<template>
    <div>
        <div class="about-area mt-80">
            <div class="container">
                <div class="row">
                    <div class="titulo text-center mtb-80">
                        <h2 class="title f32">Biblioteca</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="container">
                        <div class="about-pills">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#art" data-toggle="tab">Artículos</a></li>
                                <li><a href="#planes" data-toggle="tab">Planes</a></li>
                                <li><a href="#analisis" data-toggle="tab">Análisis</a></li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="art">
                                    <div class="row">
                                        <texbox-container :data="categoria1" v-if="categoria1.length > 0" />
                                        <div v-else class="proximamente">Próximamente</div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="planes">
                                    <div class="row">
                                        <texbox-container :data="categoria3" v-if="categoria3.length > 0" />
                                        <div v-else class="proximamente">Próximamente</div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="analisis">
                                    <div class="row">
                                        <texbox-container :data="categoria4" v-if="categoria4.length > 0" />
                                        <div v-else class="proximamente">Próximamente</div>
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
    data() {
        return {
            biblioteca: [],
            categoria1: [],
            categoria3: [],
            categoria4: [],
            limitationList: 12
            
        }
    },
    mounted() {
        $('#lock').removeClass('hidden');
        axios.get('/api/biblioteca')
			.then((res) => {
                console.log(res);
                this.categoria1 = res.data.categoria1;
                this.categoria3 = res.data.categoria3;
                this.categoria4 = res.data.categoria4;
                $('#lock').addClass('hidden');
			})
			.catch((err) =>{
				console.log(err);
            });
    },
    methods:{
    },
    updated: function () {
    }
}
</script>
<style>
.proximamente { text-align: center; font-size: 32px; font-weight: bold; padding: 20px 0; }
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