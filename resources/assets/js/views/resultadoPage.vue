<template>
<section>
    
    <div class="container ">
        <div class="search-lg mt-40 default-bg">
            <div action="" id="search-form">
                <input type="search" name="buscar" placeholder="Buscar..." v-model.lazy="keywords"/>
            </div>
        </div>
    </div>

    <div class="noRults" v-if="results == undefined  || results.length == 0">
		<div class="container default-bg">
			<div class="row mb-40">
				<div class="col-xs-12 mtb-80">
					<h2 class="title f44 text-center"> No se encontró resultados.</h2>
                    <hr>
					<div class="contenedor-text default mlg">
                        Regresar a la página <router-link :to="{name: 'home'}" class="title f16 " >principal</router-link>
                    </div>
				</div>
			</div>
		</div>
    </div>
    <div v-else>
        <div class="container">
            <div class="titulo text-center mt-40">
                <h3> Resultados {{results.length}}</h3>
            </div>
            <div class="row  mt-24">
                <div class="col-md-4 col-sm-12 col-xs-12" v-for="(item, index) in results" :key="index">
                    <div class="card-noticias mb-4 o-hidden default-bg">
                        <img class="card-noticias-img-top" :src="item.urlBanner" alt="">
                        <div class="card-noticias-body ">
                            <h5 class="card-noticias-title"><a v-text="item.title"></a></h5>
                            <p class="card-noticias-text text-gray hidden-sm hidden-xs" v-text="item.excerpt"></p>
                            <div v-if="item.category_id == 1">
                                <router-link :to="{name: item.url}" >Ver articulo</router-link>
                            </div>
                            <div v-else-if="item.category_id == 2 || item.category_id == 6 ">
                                <noticia-link :noticia="item" >Ver articulo</noticia-link>
                            </div>
                            <div v-else-if="item.category_id == 3">
                                <proyecto-link :proyecto="item" >Ver articulo</proyecto-link>
                            </div>
                            <div v-else-if="item.category_id == 5">
                                <url-link :info="item" :nombre="'estrategia_show'">Ver articulo</url-link>
                            </div>
                            <div v-else-if="item.category_id == 5">
                                <url-link :info="item" :nombre="'estrategia_show'">Ver articulo</url-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</template>
<script>
export default {
    props:['keywords'],
    data() {
        return {
            results: []
        }
    },
    mounted() {
        $('#lock').addClass('hidden');
        this.search();
    },
    methods: {
        search (){
            axios.get('/api/indexsearch', { params: { keywords: this.keywords } })
            .then(res => {
                this.results = res.data
                $('#lock').addClass('hidden');
            })
            .catch(error => {
                $('#lock').addClass('hidden');
            });
        }
    },
    watch: {
        keywords: 'search',
    }
    
}
</script>
<style >
    .noResult .container { padding: 0 !important; }
</style>