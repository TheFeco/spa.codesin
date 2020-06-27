<template>
    <div class="row">
        <div class="card-1" >
            <div class="card-p" v-for="(item, index) in politicas" :key="index">
                <div class="card-p-img">
                    <noticia-link :noticia="item" >
                        <img class="img-responsive" :src="item.urlBanner" alt="">
                    </noticia-link>
                </div>
                <div class="card-p-constainer">
                    <div class="title f16 text-center">
                        <div><noticia-link :noticia="item" v-text="item.title"></noticia-link></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                
    <!-- <div class="row" v-if="vermas">
        <div class="vertodos col-xs-12">
            <router-link :to="{ name: 'noticias' }" >Ver todas</router-link>
        </div>
    </div> -->
</template>
<script>
export default {
    props:['politicas', 'vermas']
}
</script>
<style>
    .card-1 {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-gap: 1rem;
        grid-template-columns: repeat(3, 1fr);
    }
    .card-p{ 
        background-color: #FFF;
        color: #4A4A4A;
        height: 22.25rem;
    }
    .card-p-img { height: 16.438rem; width: 22.25rem; margin: 0;}
    .card-p-constainer { height: 7rem; padding: 2rem 2rem 2rem 2rem; }
</style>