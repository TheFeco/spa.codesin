<template>
    <div class="home">
        <!-- AQUI IRIA EL VIDEO - slider-area-start -->
		<!-- Banner Area Inicio -->
		<banner-area :page="pageInfo" :img="img" class="mb-8"/>
		<!-- EL VIDEO - slider-area-end -->
		<!-- QUIENES SOMOS - Inicio -->
		<div class="contenedor mb-8 seccion1">
			<div class="row ">
				<div class="col-12 mtb-80">
					<h1 class="title f44 text-center" v-text="pageInfo.title"></h1>
					<div class=" contenedor-text t32 text-center mtb-30 msm" v-html="pageInfo.body"></div>
				</div>
			</div>
		</div>
		<!-- QUIENES SOMOS - Fin -->
		<!-- MODELO DE DESARROLLO - Inicio -->
		<div class="contenedor default-bg mb-4">
			<div class="row">
				<div class="col-xs-12 mtb-80">
					<h2 class="title f28 text-center">Modelo de Desarrollo Económico para Sinaloa</h2>
					<div class="contenedor-text default mlg">El principal objetivo del CODESIN es promover el desarrollo del estado con una visión integral y de largo plazo fomentando la colaboración público-privada. Esta visión se despliega en un Modelo Competitivo para el Desarrollo del Estado al cual se alinean las estrategias, políticas públicas y proyectos impulsados. </div>
				</div>
			</div>
			<!-- icons -->
			<div class="row">
				<div class="col-xs-12 text-gray">
					<div class="icons col-md-2 col-sm-2 col-xs-4" data-container="body" title="" data-toggle="popover" data-placement="bottom" :data-content="msg" data-original-title="Bioeconomía">
						<div class="icon-img pop" >
							<img class="pop" src="/img/home/process.png" alt="Bioeconomia">
						</div>
						<div class="icon-text pop">
							<div class="excerpt pop">
								<span class="pop">Bioeconomía</span>
							</div>
						</div>
					</div>
					<!-- Economía Digital -->
					<div class="icons col-md-2 col-sm-2 col-xs-4" data-container="body" title="" data-toggle="popover" data-placement="bottom" :data-content="msg" data-original-title="Bioeconomía">
						<div class="icon-img pop">
							<img class="pop" src="/img/home/pay-per-click.png" alt="Bioeconomia">
						</div>
						<div class="icon-text pop">
							<div class="excerpt pop">
								<span class="pop">Economía Digital</span>
							</div>
						</div>
					</div>
					<!-- Turismo -->
					<div class="icons col-md-2 col-sm-2 col-xs-4" data-container="body" title="" data-toggle="popover" data-placement="bottom" data-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim." data-original-title="Bioeconomía">
						<div class="icon-img pop">
							<img class="pop" src="/img/home/process.png" alt="Bioeconomia">
						</div>
						<div class="icon-text pop">
							<div class="excerpt pop">
								<span class="pop">Turismo</span>
							</div>
						</div>
					</div>
					<!-- Logística -->
					<div class="icons col-md-2 col-sm-2 col-xs-4 mobile" data-container="body" title="" data-toggle="popover" data-placement="bottom" data-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim." data-original-title="Bioeconomía">
						<div class="icon-img pop">
							<img class="pop" src="/img/home/process.png" alt="Bioeconomia">
						</div>
						<div class="icon-text pop">
							<div class="excerpt ">
								<span class="pop">Logística</span>
							</div>
						</div>
					</div>
					<!-- Manufactura -->
					<div class="icons col-md-2 col-sm-2 col-xs-4" data-container="body" title="" data-toggle="popover" data-placement="bottom" data-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim." data-original-title="Bioeconomía">
						<div class="icon-img pop">
							<img class="pop" src="/img/home/process.png" alt="Bioeconomia">
						</div>
						<div class="icon-text pop">
							<div class="excerpt pop">
								<span class="pop">Manufactura</span>
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
						<div class="icons col-md-2 col-sm-2 col-xs-4" data-container="body" title="" data-toggle="popover" data-placement="bottom" data-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim." data-original-title="Bioeconomía">
							<div class="icon-img">
								<img src="/img/home/light-bulb.png" alt="Bioeconomia">
							</div>
							<div class="icon-text">
								<div class="excerpt">
									<span>Sustentabilidad Ambiental</span>
								</div>
							</div>
						</div>
						<!--  -->
						<div class="icons col-md-2 col-sm-2 col-xs-4" data-container="body" title="" data-toggle="popover" data-placement="bottom" data-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim." data-original-title="Bioeconomía">
							<div class="icon-img">
								<img src="/img/home/light-bulb.png" alt="Bioeconomia">
							</div>
							<div class="icon-text">
								<div class="excerpt">
									<span>Sistema de Derecho</span>
								</div>
							</div>
						</div>
						<!--  -->
						<div class="icons col-md-2 col-sm-2 col-xs-4" data-container="body" title="" data-toggle="popover" data-placement="bottom" data-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim." data-original-title="Bioeconomía">
							<div class="icon-img">
								<img src="/img/home/light-bulb.png" alt="Bioeconomia">
							</div>
							<div class="icon-text">
								<div class="excerpt">
									<span>Investigación, Desarrollo e Innovación</span>
								</div>
							</div>
						</div>
						<!--  -->
						<div class="icons col-md-2 col-sm-2 col-xs-4" data-container="body" title="" data-toggle="popover" data-placement="bottom" data-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim." data-original-title="Bioeconomía">
							<div class="icon-img">
								<img src="/img/home/light-bulb.png" alt="Bioeconomia">
							</div>
							<div class="icon-text">
								<div class="excerpt">
									<span>Educación</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 text-gray parte3 mb-8">
						<!-- Planeación Urbana -->
						<div class="icons col-md-3 col-xs-4" data-container="body" title="" data-toggle="popover" data-placement="bottom" :data-content="msg" data-original-title="Bioeconomía">
							<div class="icon-img">
								<img src="/img/home/light-bulb.png" alt="Bioeconomia">
							</div>
							<div class="icon-text">
								<div class="excerpt">
									<span>Planeación Urbana</span>
								</div>
							</div>
						</div>
						<!-- Gobierno Locales -->
						<div class="icons col-md-3 col-xs-4" data-container="body" title="" data-toggle="popover" data-placement="bottom" data-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim." data-original-title="Bioeconomía">
							<div class="icon-img">
								<img src="/img/home/light-bulb.png" alt="Bioeconomia">
							</div>
							<div class="icon-text">
								<div class="excerpt">
									<span>Gobierno Locales</span>
								</div>
							</div>
						</div>
						<!-- Salud -->
						<div class="icons col-md-3 col-xs-4" data-container="body" title="" data-toggle="popover" data-placement="bottom" data-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim." data-original-title="Bioeconomía">
							<div class="icon-img">
								<img src="/img/home/light-bulb.png" alt="Bioeconomia">
							</div>
							<div class="icon-text">
								<div class="excerpt">
									<span>Salud</span>
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
								<div class="icons  col-sm-4 col-xs-4">
									<div class="icon-img">
										<img src="/img/home/light-bulb.png" alt="Sustentabilidad Ambiental">
									</div>
									<div class="icon-text">
										<div class="excerpt">
											<span>Sustentabilidad Ambiental</span>
										</div>
									</div>
								</div>
								<!--  -->
								<div class="icons col-sm-4 col-xs-4">
									<div class="icon-img">
										<img src="/img/home/light-bulb.png" alt="Sistema de Derecho">
									</div>
									<div class="icon-text">
										<div class="excerpt">
											<span>Sistema de Derecho</span>
										</div>
									</div>
								</div>
								<!--  -->
								<div class="icons col-sm-4 col-xs-4">
									<div class="icon-img">
										<img src="/img/home/light-bulb.png" alt="Investigación, Desarrollo e Innovación">
									</div>
									<div class="icon-text">
										<div class="excerpt">
											<span>Investigación, Desarrollo e Innovación</span>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<!--  -->
								<div class="icons col-sm-4 col-xs-4">
									<div class="icon-img">
										<img src="/img/home/light-bulb.png" alt="Educación">
									</div>
									<div class="icon-text">
										<div class="excerpt">
											<span>Educación</span>
										</div>
									</div>
								</div>
								<!--  -->
								<div class="icons col-sm-4 col-xs-4">
									<div class="icon-img">
										<img src="/img/home/light-bulb.png" alt="Planeación">
									</div>
									<div class="icon-text">
										<div class="excerpt">
											<span>Planeación</span>
										</div>
									</div>
								</div>
								<!--  -->
								<div class="icons col-sm-4 col-xs-4">
									<div class="icon-img">
										<img src="/img/home/light-bulb.png" alt="Gobiernos Locales">
									</div>
									<div class="icon-text">
										<div class="excerpt">
											<span>Gobiernos Locales</span>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<!--  -->
								<div class="icons col-xs-12 mb-8">
									<div class="icon-img">
										<img src="/img/home/light-bulb.png" alt="Salud">
									</div>
									<div class="icon-text">
										<div class="excerpt">
											<span>Salud</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- MODELO DE DESARROLLO - Fin -->
		<!-- NOTICIAS -->
		<noticias-area :noticias="noticias" :vermas="true" />
		<!-- NOTICIAS - Fin -->
    </div>
</template>
<script>
    export default {
		
		data(){
			return{
				pageInfo: [],
				noticias: [],
				img: '',
				msg: '32',
				items: 5,
			}
		},
		created(){
			this.getdata();
		},
		 methods: {
			getdata(){
				fetch("/api/home")
				.then(res => res.json())
				.then(json => {
					this.pageInfo = json.pageinfo;
					this.noticias = json.noticias;
					this.img = this.smallScreen(this.pageInfo.urlBanner, this.pageInfo.urlBannerMobile);
					$('#lock').addClass('hidden');
				});
			}
		
		},
        mounted() {
			
			$('#lock').removeClass('hidden');

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
		}
    }
</script>
