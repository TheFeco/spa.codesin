<template>
    <div>
        <!-- inversiones Inicio -->
        <div class="inversiones-area mb-80">
            <div class="container">
                <div class="titulo text-center mb-60">
                    <h3>Plan de trabajo Zona Norte</h3>
                </div>
                <div class="row default-bg">
                    <div class="col-md-4 col-sm-12">
                        <div class="inversiones-img hidden-sm hidden-xs">
                            <img :src="mapa" alt="about">
                        </div>
                        <div class="inversiones-img hidden-lg hidden-md " vel>
                            <img class="img-responsive" :src="mapa" alt="img">
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <div class="inversiones-content mb-8">
                            <div class="contenedor-text default mb-8">
                                <ul v-for="(proyecto, index) in proyect.posts" :key="index" class="contenedor-text t20">
                                    <li><strong>{{index +1}}</strong> 
                                        <url-link :info="proyecto" :nombre="'proyecto_show'" v-text="proyecto.title"></url-link>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- pryectos de la zona -->
        <div class="mb-8">
            <proyectos-area :proyectos="proyect.posts"></proyectos-area>
        </div>
    </div>
</template>
<script>
export default {
    props:['url'],
    data() {
        return {
            pageInfo: [],
            proyect:[],
            mapa: '/img/mapa/zn.jpeg'
        }
    },
    methods: {
        goTo : function(zona) {
            this.$router.push({ name: 'proyecto_show',  params:{url:zona.url}});
        }
    },
    mounted() {
        $('#lock').addClass('hidden');
            axios.get(`/api/zonas/${this.url}`)
            .then(res =>{
                console.log(res);
                this.proyect = res.data.post;
                $('#lock').addClass('hidden');
            })
            .catch(err =>{
                console.log(err.response.data);
                $('#lock').addClass('hidden');
            });
    },
}
</script>