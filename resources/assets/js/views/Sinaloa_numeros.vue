<template>
    <section class="pages container">
        <div class="container">
            <div class="row">
                <div class="sm-12 text-center mb-60">
                    <h2>Semáforo económico</h2>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="cards">
                        <div class="card">
                            <div class="card-box-icon text-left">
                                <img src="/img/icons/up.svg" alt="" v-if="positivo">
                                <img src="/img/icons/down.svg" alt="" v-else>
                            </div>
                            <div class="card-box-constainer">
                                <div class="card-box-title text-left">
                                    Inversión extranjera directa
                                </div>
                                <hr>
                                <div class="text-left">
                                    <span class="numeros">44.95 </span> <strong>MMD</strong>
                                </div>
                                <div class="row mt-16">
                                    <div class="small">
                                        <div class="left">4° Trim. 2019</div>
                                        <div class="right small extrabold">-4.85%</div>
                                    </div>
                                </div>
                                <div class="row mt-10 mb-16">
                                    <div class="small">
                                        <div class="left">Ranking Vs. Nacional</div>
                                        <div class="right small extrabold">24/32</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mt-16">
                                    <div class="small">
                                        <div class="left">47.25 MDD</div>
                                        <div class="right small extrabold">4º Trim. 2018</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-box-icon text-left">
                                <img src="/img/icons/up.svg" alt="" v-if="positivo">
                                <img src="/img/icons/down.svg" alt="" v-else>
                            </div>
                            <div class="card-box-constainer">
                                <div class="card-box-title text-left">
                                    Inversión privada
                                </div>
                                <hr>
                                <div class="text-left">
                                    <span class="numeros">18,240 </span> <strong>MDP</strong>
                                </div>
                                <div class="row mt-16">
                                    <div class="small">
                                        <div class="left">2019</div>
                                        <div class="right small extrabold">-40.68%</div>
                                    </div>
                                </div>
                                <div class="row mt-10 mb-16">
                                    <div class="small">
                                        <div class="left">Ene-sep 2019</div>
                                        <div class="right small extrabold"></div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mt-16">
                                    <div class="small">
                                        <div class="left">30,747 MDP</div>
                                        <div class="right small extrabold">2018</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-box-icon text-left">
                                <img src="/img/icons/up.svg" alt="" v-if="positivo">
                                <img src="/img/icons/down.svg" alt="" v-else>
                            </div>
                            <div class="card-box-constainer">
                                <div class="card-box-title text-left">
                                    Empleo generado
                                </div>
                                <hr>
                                <div class="text-left">
                                    <span class="numeros">11,585 </span> <strong>Empleos</strong>
                                </div>
                                <div class="row mt-16">
                                    <div class="small">
                                        <div class="left">Ene 2019 - Ene 2020</div>
                                        <div class="right small extrabold">+2.04%</div>
                                    </div>
                                </div>
                                <div class="row mt-10 mb-16">
                                    <div class="small">
                                        <div class="left">Ranking Vs. Nacional</div>
                                        <div class="right small extrabold">14/32</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mt-16">
                                    <div class="small">
                                        <div class="left">580,209 Empleo total</div>
                                        <div class="right small extrabold">Ene 2020</div>
                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="small">
                                        <div class="left">568,624 Empleo total</div>
                                        <div class="right small extrabold">Ene 2019</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-box-icon text-left">
                                <img src="/img/icons/up.svg" alt="" v-if="positivo">
                                <img src="/img/icons/down.svg" alt="" v-else>
                            </div>
                            <div class="card-box-constainer">
                                <div class="card-box-title text-left">
                                    PIB per cápita
                                </div>
                                <hr>
                                <div class="text-left">
                                    <span class="numeros">157,802 </span> <strong>Pesos</strong>
                                </div>
                                <div class="row mt-16">
                                    <div class="small">
                                        <div class="left">2018</div>
                                        <div class="right small extrabold">+5.58%</div>
                                    </div>
                                </div>
                                <div class="row mt-10 mb-16">
                                    <div class="small">
                                        <div class="left">Ranking Vs. Nacional</div>
                                        <div class="right small extrabold">18/32</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mt-16">
                                    <div class="small">
                                        <div class="left">149,466 Pesos</div>
                                        <div class="right small extrabold">Ene 2020</div>
                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="small">
                                        <div class="left">568,624 Empleo total</div>
                                        <div class="right small extrabold">Ene 2019</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-box-icon text-left">
                                <img src="/img/icons/up.svg" alt="" v-if="positivo">
                                <img src="/img/icons/down.svg" alt="" v-else>
                            </div>
                            <div class="card-box-constainer">
                                <div class="card-box-title text-left">
                                    PIB
                                </div>
                                <hr>
                                <div class="text-left">
                                    <span class="numeros">395,849.29 </span> <strong>MDP</strong>
                                </div>
                                <div class="row mt-16">
                                    <div class="small">
                                        <div class="left">2018</div>
                                        <div class="right small extrabold">+2.71%</div>
                                    </div>
                                </div>
                                <div class="row mt-10 mb-16">
                                    <div class="small">
                                        <div class="left">Ranking Vs. Nacional</div>
                                        <div class="right small extrabold">17/32</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mt-16">
                                    <div class="small">
                                        <div class="left">385,388.82 MDP</div>
                                        <div class="right small extrabold">2017</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-box-icon text-left">
                                <img src="/img/icons/up.svg" alt="" v-if="positivo">
                                <img src="/img/icons/down.svg" alt="" v-else>
                            </div>
                            <div class="card-box-constainer">
                                <div class="card-box-title text-left">
                                    Población
                                </div>
                                <hr>
                                <div class="text-left">
                                    <span class="numeros">2,966,321 </span> <strong>Personas</strong>
                                </div>
                                <div class="row mt-16">
                                    <div class="small">
                                        <div class="left">2015</div>
                                        <div class="right small extrabold">+7.17%</div>
                                    </div>
                                </div>
                                <div class="row mt-10 mb-16">
                                    <div class="small">
                                        <div class="left">Ranking Vs. Nacional</div>
                                        <div class="right small extrabold">15/32</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mt-16">
                                    <div class="small">
                                        <div class="left">2,767,761 Personas</div>
                                        <div class="right small extrabold">2017</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">7</div>
                        <div class="card">8</div>
                        <div class="card">9</div>
                        <div class="card">10</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        data() {
            return {
                authors: [],
                categories: [],
                posts: [],
                positivo: true,
                estrategias: 12, 
            }
        },  
        mounted() {
           axios.get('/api/archivo')
           .then(res =>{
               this.authors = res.data.authors,
               this.categories = res.data.categories,
               this.posts = res.data.posts
           })
           .catch(err => {

           });
        }
    }
</script>
