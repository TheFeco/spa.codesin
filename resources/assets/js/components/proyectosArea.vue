<template>
    <div class="home-noticias-area mt-24">
        <div class="container">
            <div class="title f32 text-center" v-if="vermas">
                <div > Plan de trabajo {{proyectos.name}}</div>
            </div>
            <div class="row  mt-24 texto">
                <div class="col-md-4 col-sm-12 col-xs-12 " v-for="(proyecto, index) in proyectos.posts" :key="index">
                    <div class="card-noticias mb-4 o-hidden default-bg"><img class="card-noticias-img-top" :src="proyecto.urlBanner" alt="">
                        <div class="card-noticias-body ">
                            <h5 class="card-noticias-title"><url-link :info="proyecto" :nombre="'proyecto_show'" v-text="proyecto.title"></url-link></h5>
                            <p class="card-noticias-text text-gray hidden-sm hidden-xs" v-text="proyecto.excerpt"></p>
                            <url-link :info="proyecto" :name="'proyecto_show'"  class="vermas hidden-sm hidden-xs">Ver mas</url-link>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" v-if="vermas">
                <div class="vertodos col-xs-12">
                    <div class="i" id="masTexto">Ver mas</div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props:['proyectos', 'vermas'],
    
    mounted() {
        $(".i").click(function(){
            $(".texto").toggleClass("hide-text");
            $("#masTexto").toggleClass("padding-text");
            $(".texto").hasClass("hide-text") ? $(this).text("Leer menos") : $(this).text("Leer más") ;
        });
    },
}
</script>
<style>
.hide-text{
    overflow: initial !important;
    height: auto !important;
    }
.texto{
  height: 151rem;
  overflow: hidden;
}
.i { cursor: pointer; }
.padding-text{
  margin-top : 25px !important;
  padding-top: -20px;
}
#masTexto {
  width: 100%;
  height: 4em;
    color: #007D80;
  font-family: "Open Sans";
  font-size: 16px;
  font-weight: bold;
  letter-spacing: 0;
  line-height: 24px;
  text-align: center;
}
</style>