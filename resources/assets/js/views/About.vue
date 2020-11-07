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
                            <div class="inversiones-content mr-80 mb-8">
                                <h2 class="title f32 mt-80 hidden-sm hidden-xs" v-text="pageInfo.title"></h2>
                                <div class="contenedor-text default mt-32" v-html="pageInfo.body"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODELO DE DESARROLLO - Inicio -->
		<div class="contenedor default-bg mt-80 mb-4">
			<div class="row">
				<div class="col-xs-12 mtb-80">
					<h2 class="title f28 text-center" v-text="sections.title"></h2>
					<div class="contenedor-text default mlg" v-html="sections.body"></div>
				</div>
			</div>
			<!-- icons -->
			<div class="row">
				<div class="col-xs-12 text-gray small">
					<div class="icons col-md-2 col-sm-2 col-xs-4" data-container="body" title="" data-toggle="popover" data-placement="bottom" :data-content="sections.icon1_popover" :data-original-title="sections.icon1">
						<div class="icon-img pop" >
							<img class="pop" :src="sections.icon1_img" :alt="sections.icon1">
						</div>
						<div class="icon-text pop">
							<div class="excerpt pop">
								<span class="pop" v-text="sections.icon1"></span>
							</div>
						</div>
					</div>
					<!-- Economía Digital -->
					<div class="icons col-md-2 col-sm-2 col-xs-4" data-container="body" title="" data-toggle="popover" data-placement="bottom" :data-content="sections.icon2_popover" :data-original-title="sections.icon2">
						<div class="icon-img pop">
							<img class="pop" :src="sections.icon2_img" :alt="sections.icon2">
						</div>
						<div class="icon-text pop">
							<div class="excerpt pop">
								<span class="pop" v-text="sections.icon2"></span>
							</div>
						</div>
					</div>
					<!-- Turismo -->
					<div class="icons col-md-2 col-sm-2 col-xs-4" data-container="body" title="" data-toggle="popover" data-placement="bottom" :data-content="sections.icon3_popover" :data-original-title="sections.icon3">
						<div class="icon-img pop">
							<img class="pop" :src="sections.icon3_img" :alt="sections.icon3">
						</div>
						<div class="icon-text pop">
							<div class="excerpt pop">
								<span class="pop" v-text="sections.icon3"></span>
							</div>
						</div>
					</div>
					<!-- Logística -->
					<div class="icons col-md-2 col-sm-2 col-xs-4 mobile" data-container="body" title="" data-toggle="popover" data-placement="bottom" :data-content="sections.icon4_popover" :data-original-title="sections.icon4">
						<div class="icon-img pop">
							<img class="pop" :src="sections.icon4_img" :alt="sections.icon4">
						</div>
						<div class="icon-text pop">
							<div class="excerpt ">
								<span class="pop" v-text="sections.icon4"></span>
							</div>
						</div>
					</div>
					<!-- Manufactura -->
					<div class="icons col-md-2 col-sm-2 col-xs-4" data-container="body" title="" data-toggle="popover" data-placement="bottom" :data-content="sections.icon5_popover" :data-original-title="sections.icon5">
						<div class="icon-img pop">
							<img class="pop" :src="sections.icon5_img" :alt="sections.icon5">
						</div>
						<div class="icon-text pop">
							<div class="excerpt pop">
								<span class="pop" v-text="sections.icon5"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- titulo Plataforma de competitividad -->
			<div class="row">
				<div class="col-xs-12">
					<div class="subtitle f28 mt-80 text-center">Plataforma de competitividad para impulsar el Estado</div>
				</div>
			</div>
			<!-- icons Plataforma de competitividad -->
			<div class="hidden-sm hidden-xs">
				<div class="row" >
					<div class="col-xs-12 text-gray parte2">
						<!--  -->
						<div class="icons col-md-2 col-sm-2 col-xs-4" data-container="body" title="" data-toggle="popover" data-placement="bottom" :data-content="sections.icon6_popover" :data-original-title="sections.icon6">
							<div class="icon-img pop">
								<img class="pop" :src="sections.icon6_img" :alt="sections.icon6">
							</div>
							<div class="icon-text pop">
								<div class="excerpt pop">
									<span class="pop" v-text="sections.icon6"></span>
								</div>
							</div>
						</div>
						<!--  -->
						<div class="icons col-md-2 col-sm-2 col-xs-4" data-container="body" title="" data-toggle="popover" data-placement="bottom" :data-content="sections.icon7_popover" :data-original-title="sections.icon7">
							<div class="icon-img pop">
								<img class="pop" :src="sections.icon7_img" :alt="sections.icon7">
							</div>
							<div class="icon-text pop">
								<div class="excerpt pop">
									<span class="pop" v-text="sections.icon7"></span>
								</div>
							</div>
						</div>
						<!--  -->
						<div class="icons col-md-2 col-sm-2 col-xs-4" data-container="body" title="" data-toggle="popover" data-placement="bottom" :data-content="sections.icon8_popover" :data-original-title="sections.icon8">
							<div class="icon-img pop">
								<img class="pop" :src="sections.icon8_img" :alt="sections.icon8">
							</div>
							<div class="icon-text pop">
								<div class="excerpt pop">
									<span class="pop" v-text="sections.icon8"></span>
								</div>
							</div>
						</div>
						<!--  -->
						<div class="icons col-md-2 col-sm-2 col-xs-4" data-container="body" title="" data-toggle="popover" data-placement="bottom" :data-content="sections.icon9_popover" :data-original-title="sections.icon9">
							<div class="icon-img pop">
								<img class="pop" :src="sections.icon9_img" :alt="sections.icon9">
							</div>
							<div class="icon-text pop">
								<div class="excerpt pop">
									<span class="pop" v-text="sections.icon9"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 text-gray parte3 mb-8">
						<!-- Planeación Urbana -->
						<div class="icons col-md-3 col-xs-4" data-container="body" title="" data-toggle="popover" data-placement="bottom" :data-content="sections.icon10_popover" :data-original-title="sections.icon10">
							<div class="icon-img pop">
								<img class="pop" :src="sections.icon10_img" :alt="sections.icon10">
							</div>
							<div class="icon-text pop">
								<div class="excerpt pop">
									<span class="pop" v-text="sections.icon10"></span>
								</div>
							</div>
						</div>
						<!-- Gobierno Locales -->
						<div class="icons col-md-3 col-xs-4" data-container="body" title="" data-toggle="popover" data-placement="bottom" :data-content="sections.icon11_popover" :data-original-title="sections.icon11">
							<div class="icon-img pop">
								<img class="pop" :src="sections.icon11_img" :alt="sections.icon11">
							</div>
							<div class="icon-text pop">
								<div class="excerpt pop">
									<span class="pop" v-text="sections.icon11"></span>
								</div>
							</div>
						</div>
						<!-- Salud -->
						<div class="icons col-md-3 col-xs-4" data-container="body" title="" data-toggle="popover" data-placement="bottom" :data-content="sections.icon12_popover" :data-original-title="sections.icon12">
							<div class="icon-img pop">
								<img class="pop" :src="sections.icon12_img" :alt="sections.icon12">
							</div>
							<div class="icon-text pop">
								<div class="excerpt pop">
									<span class="pop" v-text="sections.icon12"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- icons Plataforma de competitividad mobile -->
			<div class="hidden-lg hidden-md small">
				<div class="row">
					<div class="col-xs-12">
						<div class="small-icons">
							<div class="row">
								<!--  -->
								<div class="icons  col-sm-4 col-xs-4" data-container="body" title="" data-toggle="popover" data-placement="bottom" :data-content="sections.icon6_popover" :data-original-title="sections.icon6">
									<div class="icon-img pop">
										<img class="pop" :src="sections.icon6_img" :alt="sections.icon6">
									</div>
									<div class="icon-text pop">
										<div class="excerpt pop">
											<span class="pop" v-text="sections.icon6"></span>
										</div>
									</div>
								</div>
								<!--  -->
								<div class="icons  col-sm-4 col-xs-4" data-container="body" title="" data-toggle="popover" data-placement="bottom" :data-content="sections.icon7_popover" :data-original-title="sections.icon7">
									<div class="icon-img pop">
										<img class="pop" :src="sections.icon7_img" :alt="sections.icon7">
									</div>
									<div class="icon-text pop">
										<div class="excerpt pop">
											<span class="pop" v-text="sections.icon7"></span>
										</div>
									</div>
								</div>
								<!--  -->
								<div class="icons  col-sm-4 col-xs-4" data-container="body" title="" data-toggle="popover" data-placement="bottom" :data-content="sections.icon8_popover" :data-original-title="sections.icon8">
									<div class="icon-img pop">
										<img class="pop" :src="sections.icon8_img" :alt="sections.icon8">
									</div>
									<div class="icon-text pop">
										<div class="excerpt pop">
											<span class="pop" v-text="sections.icon8"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<!--  -->
								<div class="icons  col-sm-4 col-xs-4" data-container="body" title="" data-toggle="popover" data-placement="bottom" :data-content="sections.icon9_popover" :data-original-title="sections.icon9">
									<div class="icon-img pop">
										<img class="pop" :src="sections.icon9_img" :alt="sections.icon9">
									</div>
									<div class="icon-text pop">
										<div class="excerpt pop">
											<span class="pop" v-text="sections.icon9"></span>
										</div>
									</div>
								</div>
								<!--  -->
								<div class="icons  col-sm-4 col-xs-4" data-container="body" title="" data-toggle="popover" data-placement="bottom" :data-content="sections.icon10_popover" :data-original-title="sections.icon10">
									<div class="icon-img pop">
										<img class="pop" :src="sections.icon10_img" :alt="sections.icon10">
									</div>
									<div class="icon-text pop">
										<div class="excerpt pop">
											<span class="pop" v-text="sections.icon10"></span>
										</div>
									</div>
								</div>
								<!--  -->
								<div class="icons  col-sm-4 col-xs-4" data-container="body" title="" data-toggle="popover" data-placement="bottom" :data-content="sections.icon11_popover" :data-original-title="sections.icon11">
									<div class="icon-img pop">
										<img class="pop" :src="sections.icon11_img" :alt="sections.icon11">
									</div>
									<div class="icon-text pop">
										<div class="excerpt pop">
											<span class="pop" v-text="sections.icon11"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<!--  -->
								<div class="icons col-xs-12 mb-8" data-container="body" title="" data-toggle="popover" data-placement="bottom" :data-content="sections.icon12_popover" :data-original-title="sections.icon12">
									<div class="icon-img pop">
										<img class="pop" :src="sections.icon12_img" :alt="sections.icon12">
									</div>
									<div class="icon-text pop">
										<div class="excerpt pop">
											<span class="pop" v-text="sections.icon12"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
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
                                <div class="testimonio-thumb thumb">
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
         <!-- boletin-->
         <boletin-container></boletin-container>
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
            sections: [],
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
                // console.log(res.data.sections.sections);
                this.pageInfo       = res.data.pageinfo;
                this.sections       = res.data.sections;
                this.testimonios    = res.data.testimonios;
                this.consejos       = res.data.consejos;
                this.estatales      = res.data.estatales
                this.zonaNorte      = res.data.zonaNorte;
                this.zonaCentroNorte = res.data.zonaCentroNorte;
                this.zonaCentro     = res.data.zonaCentro,
                this.zonaSur        = res.data.zonaSur;
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
        $('body').popover({
            selector: '[data-toggle="popover"]',
            trigger: "click"
            }).on("show.bs.popover", function(e){
            // hide all other popovers
            $("[data-toggle='popover']").not(e.target).popover("destroy");                  
        });

        $('html').on('click', function (e) {
            if(!$(e.target).is('.pop') && $(e.target).closest('.popover').length == 0) {
                $('[data-toggle="popover"]').popover('hide');
            }
        });

        $('.home-noticias-area,.main-menu-are').click(function (e) {
            $('.popover').popover('hide');
        });   
    },
    updated() {
        this.$nextTick(function(){
            $( ".owl-prev").html('<i class="fa fa-chevron-left"></i>');
            $( ".owl-next").html('<i class="fa fa-chevron-right"></i>');
        })
	}
}
</script>