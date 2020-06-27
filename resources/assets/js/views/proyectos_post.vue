<template>
    <div>
        <banner-area :page="pageInfo" :img="img" class="mb-8"/>
        <!-- pryectos de la zona -->
        <div class="mb-8">
            <proyectos-area :proyectos="proyect" :vermas ="true"></proyectos-area>
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