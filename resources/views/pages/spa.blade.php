<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="@yield('meta-content', 'Codesin')">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('meta-title', config('app.name'))</title>
        <!-- all css empieza -->
        <link rel="stylesheet" href="{{asset('js/bootstrap/dist/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        {{-- <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}"> --}}
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('css/codesin.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsiveCodesin.css')}}">
        <link rel="stylesheet" href="{{asset('css/reset.css')}}">
        {{-- <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> --}}
        {{-- <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script> --}}
        <!-- @stack('script') -->
        <style>
            .lock { position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 100000; background-color: rgba( 255,255,255,1 ); }
            .sk-spinner-wave.sk-spinner, .preloader-it {
                margin: 0 auto;
                width: 8%;
                top: 40%;
                position: relative;
                text-align: center;
                color: #303030;
            }
        </style>
    </head>
    <body>
    <div id="app">
        <!--Preloader-->
        <div class="lock" id="lock">
            <div class="preloader-it">
                <img class="ldld" src="/img/loaders/spin.svg">
            </div>
        </div>

	    <!--/Preloader-->
        <header class="space-inter">
            <nav-bar></nav-bar>
        </header>
        <!-- contenido -->
        <router-view></router-view>
        {{-- footer area --}}
        <section class="footer">
            <footer class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="footer-up">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="footer-logo">
                                        <a href="/"><img src="../img/logo/codesin - top.png" alt="codesin"></a>
                                    </div>
                            </div>
                            <div class="col-md-8 col-sm-6 col-xs-12">
                                <div class="single-widget">
                                    <div class="footer-social">
                                        <ul>			
                                            <li><a href="http://facebook.com" class="social-icon"><img src="../img/icons/Facebook.svg" alt=""></a></li>
                                            <li><a href="http://twitter.com" class="social-icon"><img src="../img/icons/Youtube.svg" alt=""></a></li>
                                            <li><a href="http://twitter.com" class="social-icon"><img src="../img/icons/Twitter.svg" alt=""></a></li>
                                        </ul>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="footer-section">
                                <div class="col-sm-1 col-xs-1 icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="col-sm-10">
                                    <p>(667) 712 8232<br>(667) 715 1920</p>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-contact">
                                <div class="col-sm-1 col-xs-1 icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="col-sm-10">
                                    <p>Pedro Infante 2911, interior 505 y 506, edificio Country Courts Centro de Negocios, Desarrollo Urbano Tres Ríos, Culiacán, Sinaloa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </section>
</div>
<script src="{{asset('js/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    {{-- <script src="{{asset('js/owl.carousel.min.js')}}"></script> --}}
    {{-- <!-- <script src="js/jquery.counterup.min.js"></script> --> --}}
    {{-- <!-- <script src="js/waypoints.min.js"></script> --> --}}
    {{-- <!-- <script src="js/wow.min.js"></script> --> --}}
    <!-- <script src="js/jquery.mb.YTPlayer.min.js"></script> -->
    {{-- <script src="js/jquery.meanmenu.js"></script> --}}
    <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>

    <!-- <script src="js/jquery.magnific-popup.min.js"></script> -->
    <!-- <script src="js/plugins.js"></script> -->
    <!-- Development version -->
    {{-- <script src="https://unpkg.com/@popperjs/core@2"></script> --}}
    {{-- <script src="{{asset('js/main.js')}}"></script> --}}
    {{-- <script src="{{asset('js/all.js')}}"></script> --}}
    <script src="{{mix('js/app.js')}}"></script>
</body>
</html>