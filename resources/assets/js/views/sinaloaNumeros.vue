<template>
<div>
    <banner-area2 logo="images/Sinaloaennumeros1.png" clase='sinaloaNumeros'/>
    <box-container :data="sinnumeros"/>
    <boletin-container></boletin-container>
</div>
</template>
<script>
export default {
    data() {
        return {
            sinnumeros: []
        }
    },
    mounted() {
            axios.get('/api/sinaloaNumeros/')
            .then(res =>{
                this.sinnumeros = res.data.sinaloaNum;
                $('#lock').addClass('hidden');
            })
            .catch(err =>{
                console.log(err.response.data);
            });
        }
}
</script>