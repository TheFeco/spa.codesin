<template>
    <div class="About">
        <!-- Banner Area Inicio -->
        <banner-area :page="pageInfo" :img="img"/>
        <!-- Banner Area Fin -->
        <!-- About Inicio -->
        <div class="about-area mtb-70">
            <div class="container default-bg">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="about-img ">
                            <h2 class="hidden-lg hidden-md title f32" v-text="pageInfo.title"></h2>
                            <img :srcset="`${pageInfo.urlimageMobile} 300w,${pageInfo.urlimageMobile} 1000w,${pageInfo.urlimage} 2000w`" alt="about">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="about-content mt-80">
                            <h2 class="hidden-sm hidden-xs title f32" v-text="pageInfo.title"></h2>
                            <div class="contenedor-text t32 lh-32 mds" v-html="pageInfo.body"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Fin -->
        <!-- QUIENES SOMOS - Inicio -->
        <div class="about-area">
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
    methods: {
        init: function(){
            
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
        
         $('#lock').removeClass('hidden');
         this.init(); 
        if(this.testimonios.length > 0){
        $( ".owl-prev").html('<i class="fa fa-chevron-left"></i>');
        $( ".owl-next").html('<i class="fa fa-chevron-right"></i>');
        }
        $('[data-toggle="popover"]').popover('hidde');
        
    },
}
</script>