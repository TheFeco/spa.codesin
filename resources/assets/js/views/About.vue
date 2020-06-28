<template>
    <div class="About">
        <!-- Banner Area Inicio -->
        <banner-area :page="pageInfo" :img="img"/>
        <!-- Banner Area Fin -->
        <!-- About Inicio -->
        <div class="about-area mt-80">
            <div class="container">
                <div class="row default-bg">
                    <div>
                        <div class="col-xs-12 visible-sm visible-xs">
                            <div class="inversiones-content">
                                <h2 class="title f24 text-center" v-text="pageInfo.title"></h2>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="inversiones-img hidden-sm hidden-xs">
                                <img :src="pageInfo.urlimage" alt="about">
                            </div>
                            <div class="inversiones-img hidden-lg hidden-md ">
                                <img class="img-responsive" :src="pageInfo.urlimageMobile" alt="img">
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <div class="inversiones-content mr-80">
                                <h2 class="title f32 mt-80 hidden-sm hidden-xs" v-text="pageInfo.title"></h2>
                                <div class="contenedor-text t16 mt-32" v-html="pageInfo.body"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Fin -->
        <!-- QUIENES SOMOS - Inicio -->
        <div class="about-area mt-80">
            <div class="container default-bg">
                <div class="row">
                    <div class="titulo text-center mtb-80">
                        <h2 class="title f32">Conoce al CODESIN</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="container">
                        <div class="about-pills">
                            <ul class="nav nav-tabs">
                                <li><a href="#consejo" data-toggle="tab">Consejo</a></li>
                                <li class="active"><a href="#staff" data-toggle="tab">Staff</a></li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane fade" id="consejo">
                                    <div class="row">
                                        <staff-area :staffs="consejos"/>
                                    </div>
                                    <div class="row">
                                        <div class="consejo-staff-footer">
                                            <p>GES: Gobierno del Estado de Sinaloa</p>
                                            <p>CSE: Consejo Sinaloense de Empresarios (antes Consejo Sinaloense de Hombres de Negocios)</p> 
                                            <p>CRPE: Comité Regional de Promoción Económica</p>
                                            <p>*Presidente Ejecutivo de CODESIN</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade in active" id="staff">
                                    <div class="row">
                                        <div class="titulo-staff text-center mtb-40">
                                            <h2>Oficina Estatal</h2>
                                        </div>
                                        <staff-area :staffs="estatales"/>
                                    </div>
                                    <div class="row">
                                        <div class="titulo-staff text-center mb4">
                                            <h2>Comités Regionales de Promoción Ecónomica</h2>
                                        </div>
                                        <!-- zona norte -->
                                        <zonas-area :zonas="zonaNorte" :title="'Zona Norte'"/>
                                        <!-- zona centro norte -->
                                        <zonas-area :zonas="zonaCentroNorte" :title="'Zona Centro Norte'"/>
                                        <!-- zona centro -->
                                        <zonas-area :zonas="zonaCentro" :title="'Zona Centro'"/>
                                        <!-- zona sur -->
                                        <zonas-area :zonas="zonaSur" :title="'Zona Sur'"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- QUIENES SOMOS - Fin -->
         <!-- NUESTRO TESTIMONIOS Inicio-->
         <div class="about-area mtb-80 transparent-bg">
             <div class="container">
                 <div class="testimonio-titulo text-center mb-8">
					<h3> Testimonios</h3>
				</div>
                <div class="row" v-if="testimonios.length > 0">
                    <carousel class="testimonio-active owlCarousel" :loop="true" :responsive="{0:{items:1,nav:false},600:{items:1,nav:false},1000:{items:1,nav:true}}">
                        <div class="testimonio-owl" v-for="(testimonio, index) in testimonios" :key="index">
                            <div class="col-md-6 col-sm-12 col-xs-12" >
                                <div class="testimonio-thumb">
                                    <img class="img-responsive" :src="testimonio.urlImg" alt="testimonio">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="testimonio">
                                    <div class="testimonio-contenido">
                                        <h4 class="mb-24" v-text="testimonio.name"></h4>
                                        <p v-text="testimonio.body"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </carousel>
                </div>
             </div>
         </div>
         <!-- NUESTRO TESTIMONIOS Fin-->
    </div>
</template>
<script>
export default {
    data() {
        return {
            img: '',
            pageInfo: [],
            testimonios: [],
            consejos: [],
            estatales: [],
            zonaNorte: [],
            zonaCentroNorte:  [],
            zonaCentro:  [],
            zonaSur:  [],
        }
    },
    created() {
        this.init();
    },
    methods: {
        init: function(){
             $('#lock').removeClass('hidden');
            axios.get('/api/quienes-somos')
			.then((res) => {
				this.pageInfo = res.data.pageinfo;
                this.testimonios = res.data.testimonios;
                this.consejos = res.data.consejos;
                this.estatales = res.data.estatales
                this.zonaNorte = res.data.zonaNorte;
                this.zonaCentroNorte = res.data.zonaCentroNorte;
                this.zonaCentro = res.data.zonaCentro,
                this.zonaSur = res.data.zonaSur;
                // this.$load = false;
                this.img = this.smallScreen(this.pageInfo.urlBanner, this.pageInfo.urlBannerMobile);
                $('#lock').addClass('hidden');
			})
			.catch((err) =>{
                console.log(err);
                $('#lock').addClass('hidden');});
        }
    },
    mounted() {
        
    },
    updated() {
        this.$nextTick(function(){
            $( ".owl-prev").html('<i class="fa fa-chevron-left"></i>');
            $( ".owl-next").html('<i class="fa fa-chevron-right"></i>');
        })
    },
}
</script>