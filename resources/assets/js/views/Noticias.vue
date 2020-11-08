<template>
    <noticias-area :noticias="noticias" :vermas = "false" />
</template>
<script>
export default {
    data() {
        return {
            noticias: []
        }
    },
    mounted() {
            axios.get('/api/noticias/')
            .then(res =>{
                console.log(res);
                this.noticias = res.data;
            })
            .catch(err =>{
                console.log(err.response.data);
            });
        }
}
</script>