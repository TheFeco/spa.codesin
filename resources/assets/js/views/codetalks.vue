<template>
<div>
    <banner-area2 logo="images/Code talks.png" clase="codetalks"/>
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
                console.log(res);
                this.codetalks = res.data.codetalks;
                $('#lock').addClass('hidden');
            })
            .catch(err =>{
                console.log(err.response.data);
            });
        }
}
</script>