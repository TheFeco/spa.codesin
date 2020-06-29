<template>
    <div class="header-area">
        <div class="header-top-area azul-bg hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="header-login">
                            <li><a href="/login"><i class="fa fa-key"></i>Login</a></li>
                            <li><a href="signup.html"><i class="fa fa-key"></i>gestori</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-2">
                        <div class="logo">
                            <router-link :to="{name:'home'}"><img v-bind:src="'../img/logo/codesin - top.png'" alt="" /></router-link>
                        </div>
                    </div>
                    <div class="col-md-10 col-sm-10">
                        <div class="menu-area floatright hidden-xs">
                            <nav>
                                <ul>
                                    <li><router-link :to="{name: 'home'}" class="menu-nav">Inicio<span class="line"></span></router-link>
                                    <li><router-link :to="{name: 'quienes-somos'}" class="menu-nav">¿Quiénes somos? <span class="line"></span></router-link>
                                    <li><router-link :to="{name: 'que-hacemos'}" >¿Qué hacemos?</router-link></li>
                                    <li><router-link :to="{name: 'sinaloa'}" >Sinaloa en Números</router-link></li>
                                    <li><router-link :to="{name: 'comunicacion'}" >Comunicación</router-link></li>
                                    <li><a :href="transparencia" target="_blank">Transparencia</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu-area  visible-xs">
                            <label class="labelMenu" >Menú</label>
                            <a href="#" class="menuBtn">
                                <span class="lines"></span>
                            </a>
                            <nav class="mainMenu">
                                <ul>
                                    <li>
                                        <div class="search">
                                            <div action="" id="search-form">
                                                <button><i class="fa fa-search"></i></button >
                                                <!-- <button type="submit"></button> -->
                                                <input type="search" name="buscar" placeholder="Buscar..." v-model.lazy="keywords"/>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <router-link :to="{name: 'quienes-somos'}" >¿Quiénes somos?</router-link>
                                    </li>
                                    <li>
                                        <router-link :to="{name: 'que-hacemos'}">¿Qué hacemos?</router-link>
                                    </li>
                                    <li>
                                        <router-link :to="{name: 'sinaloa'}">Sinaloa en Números</router-link>
                                    </li>
                                    <li>
                                        <router-link :to="{name: 'comunicacion'}">Comunicación</router-link>
                                    </li>
                                    <li>
                                        <a :href="transparencia" target="_blank">Transparencia</a>
                                    </li>
                                    <li>
                                        <a v-bind:href="facebook" target="_blank" class="facebook"><img v-bind:src="'../img/icons/Facebook.svg'" alt=""></a>
                                        <a v-bind:href="youtube"  target="_blank" class="facebook"> <img v-bind:src="'../img/icons/Youtube.svg'" alt=""></a>
                                        <a v-bind:href="twitter"  target="_blank" class="facebook"> <img v-bind:src="'../img/icons/Twitter.svg'" alt=""></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            keywords: null,
            transparencia : 'http://codesin.transparenciasinaloa.gob.mx/obligaciones-de-transparencia-del-consejo-para-el-desarrollo-economico-del-estado-de-sinaloa-codesin/',
        }
    },
    mounted() {
        // /*mobile menu*/
        $('.menuBtn').click(function() {
            $(this).toggleClass('act');
                if($(this).hasClass('act')) {
                    $('.mainMenu').addClass('act');
                    $('.labelMenu').text("Cerrar");
                }
                else {
                    $('.mainMenu').removeClass('act');
                    $('.labelMenu').text("Menú");
                }
        });
        $('.mobile-menu-area .mainMenu a, .logo a').click(function() {
            if($('.menuBtn').hasClass('act')) {
                $('.menuBtn').toggleClass('act');
                $('.mainMenu').removeClass('act');
                $('.labelMenu').text("Menú");
            }
        });
    },
    methods: {
        fetch() {
            $('#lock').removeClass('hidden');
            this.$router.push({
                    name: 'resultado',
                    params: {
                        keywords: this.keywords
                    }
                })
                this.cerrarMenu();
            // axios.get('/api/indexsearch', { params: { keywords: this.keywords } })
            // .then(res => {
            //     this.results = res.data
            //     this.cerrarMenu();
            //     $('#lock').addClass('hidden');
            //     this.$router.push({
            //         name: 'resultado',
            //         params: {
            //             results: res.data
            //         }
            //     })
            // })
            // .catch(error => {
            //     $('#lock').addClass('hidden');
            // });
        },
        cerrarMenu(){
            if($('.menuBtn').hasClass('act')) {
                $('.menuBtn').toggleClass('act');
                $('.mainMenu').removeClass('act');
                $('.labelMenu').text("Menú");
            }
        }
            
    },
    watch: {
        keywords: 'fetch',
    },
}
</script>