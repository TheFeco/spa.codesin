<template>
<div>
    <banner-area2 logo="images/Sinaloaennumeros1.png"/>
    <box-container :data="codetalks"/>
    <boletin-container></boletin-container>
</div>
</template>
<script>
export default {
    data() {
        return {
            codetalks: []
        }
    },
    mounted() {
            axios.get('/api/codetalks/')
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