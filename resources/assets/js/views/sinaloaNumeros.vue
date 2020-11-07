<template>
<div>
    <banner-area2 :banner="banners" logo="images/Sinaloaennumeros1.png" clase='sinaloaNumeros'/>
    <box-container :data="sinnumeros"/>
    <boletin-container></boletin-container>
</div>
</template>
<script>
export default {
    data() {
        return {
            sinnumeros: [],
            banners:[]
        }
    },
    mounted() {
            axios.get('/api/sinaloaNumeros/')
            .then(res =>{
                console.log(res);
                this.sinnumeros = res.data.sinaloaNum;
                this.banners = res.data.banners;
                $('#lock').addClass('hidden');
            })
            .catch(err =>{
                console.log(err.response.data);
            });
        }
}
</script>