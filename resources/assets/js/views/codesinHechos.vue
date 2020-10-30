<template>
<div>
    <banner-area2 logo="images/Codesinhechos.png" clase="codesinHechos"/>
    <box-container :data="codesinHechos" :visible="false"/>
    <boletin-container></boletin-container>
</div>
</template>
<script>
export default {
    data() {
        return {
            codesinHechos: []
        }
    },
    mounted() {
            axios.get('/api/codesinHechos/')
            .then(res =>{
                this.codesinHechos = res.data.codesinHechos;
                $('#lock').addClass('hidden');
            })
            .catch(err =>{
                console.log(err.response.data);
            });
        }
}
</script>