<template>
    <div class="home">
		<!-- slider_area_start -->
    <full-container class="u-clearfix u-section-1" :info="pageInfomacionTop"></full-container>
    <!-- seccion 2 -->
    <right-container :info="pageInfomacionMiddle"></right-container>
    <!-- seccion 3 -->
    <left-container :info="pageInfomacionBottom"></left-container>
		<!-- NOTICIAS -->
		<noticias-area :noticias="noticias" :vermas="true" />
    <!-- section business -->
    <business-container></business-container>
    <boletin-container></boletin-container>
    </div>
</template>
<script>
    export default {
		
		data(){
			return{
				pageInfomacion: [],
				pageInfomacionTop: [],
				pageInfomacionMiddle: [],
				pageInfomacionBottom: [],
				noticias: [],
				img: '',
				image: '../img/banner.png',
			}
		},
		created(){
			this.getdata();
		},
		 methods: {
			getdata(){
				axios.get('/api/homev2')
				.then((res) => {
          this.pageInfomacion = res.data.pagInfo;
          this.pageInfomacionTop = res.data.pagInfo[0].author;
          this.pageInfomacionMiddle = res.data.pagInfo[1].author;
          this.pageInfomacionBottom = res.data.pagInfo[2].author;
          this.noticias = res.data.noticias;
          
					$('#lock').addClass('hidden');
				})
				.catch((err) =>{
					console.log(err);
					$('#lock').addClass('hidden');});
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
<style>
/* variables nuevas */
/*  */
.slider_area .single_slider {
  height: 100vh;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}
.slider_area .single_slider .illastrator_png {
  position: relative;
  right: 63px;
}
.slider_area .single_slider .slider_info h3 {
  color: #ffffff;
  font-size: 60px;
  text-transform: capitalize;
  font-weight: 400;
  line-height: 70px;
  margin-bottom: 50px;
  margin-top: 10px;
}
.boxed_btn {
  cursor: pointer;
  font-size: 16px;
  color: #fff;
  padding: 17px 50px;
  background: #04D2C8;
  -webkit-border-radius: 30px;
  -moz-border-radius: 30px;
  border-radius: 30px;
  border: 1px solid transparent;
  display: inline-block;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}
.boxed_btn:hover {
  background: transparent;
  color: #04D2C8;
  border: 1px solid #04D2C8;
  color: #04D2C8 !important;
}
/*  */
.h-card{ 
    padding: 1rem;
    height: 100%;
    width: 100%;
    max-width: 26.25rem;
    font-family: "Open Sans";
    }
.h-cards {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-gap: 1.7rem;
    grid-template-columns: repeat(5, 1fr);
}
.h-icon { 
	width: 180px;
    height: 180px;
    margin: 8px 0 16px 0px;
    text-align: center;
    background: #F4F4F4;
    border-radius: 50%; }
.h-card-title{
  color: #4A4A4A;
  font-family: "Open Sans";
  font-size: 1rem;
  font-weight: bold;
  letter-spacing: 0.4px;
  line-height: 24px;
}
.h-card-contenido-1{
  color: #4A4A4A;
  font-family: "Open Sans";
  font-size: 28px;
  font-weight: bold;
  letter-spacing: 0;
  line-height: 30px;
}
.h-card-contenido-small{
  font-size: 12px;
  font-weight: 600;
  letter-spacing: 0;
  line-height: 17px;
}
.h-card-constainer strong{
  color: #4A4A4A;
  font-family: "Open Sans";
  font-size: 18px;
  font-weight: bold;
  letter-spacing: 0;
  line-height: 30px;
}
.h-card-contenido-small .extrabold{
    color: #4A4A4A;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 0;
    line-height: 17px;
}
</style>
