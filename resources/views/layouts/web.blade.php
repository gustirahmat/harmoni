<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Harmoni Karimunjawa') }} | Paket Wisata Karimunjawa 2H1M, 2H2M, 3H2M, 4H3M via Ferry Siginjai, Express Bahari, KMC Kartini</title>
        <link rel="shortcut icon" href="{{{ asset('img/favicon.ico') }}}">

        <meta property="og:title" content="Harmoni Karimunjawa" />
        <meta property="og:description" content="Paket Wisata Karimunjawa Open Trip Karimunjawa 2H1M 2H2M 3H2M 4H3M" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ URL::current()  }}" />
        <meta property="og:image" content="{{ asset('img/LogoLicious_20180609_210403.png') }}" />
        <meta property="fb:app_id" content="218322302188149" />

        <meta name="twitter:title" content="Harmoni Karimunjawa">
        <meta name="twitter:description" content="Paket Wisata Karimunjawa, Open Trip Karimunjawa 2H1M 2H2M 3H2M 4H3M.">
        <meta name="twitter:image" content="{{ asset('img/LogoLicious_20180609_210403.png') }}">
        <meta name="twitter:card" content="summary_large_image">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            #navbar {
                transition: top 0.5s;
                border-bottom: dodgerblue inset;
                border-width: 1px;
            }

            .nav-link {
                display: block;
                padding: 1.5rem 1rem;
            }

            .nav-item:hover {
                background: white;
            }

            .navbar-light .navbar-nav .show > .nav-link, .navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .nav-link.active {
                background: dodgerblue;
                color: white;
                font-weight: bolder;
            }

            .full-height {
                height: 100vh;

                /* Center and scale the image nicely */
                background: url("{{ asset('img/LogoLicious_20180609_210403.png') }}") no-repeat fixed top;
                background-size: cover;
            }

            .welcome-paket:hover {
                /*-webkit-filter: invert(100%);*/
                /*filter: invert(100%);*/
                /*border: thin solid dodgerblue;*/
            }

            .bounce {
                -moz-animation: bounce 3s infinite;
                -webkit-animation: bounce 3s infinite;
                animation: bounce 3s infinite;
            }
            @-moz-keyframes bounce {
                0%, 20%, 50%, 80%, 100% {
                    -moz-transform: translateY(0);
                    transform: translateY(0);
                }
                40% {
                    -moz-transform: translateY(-30px);
                    transform: translateY(-30px);
                }
                60% {
                    -moz-transform: translateY(-15px);
                    transform: translateY(-15px);
                }
            }
            @-webkit-keyframes bounce {
                0%, 20%, 50%, 80%, 100% {
                    -webkit-transform: translateY(0);
                    transform: translateY(0);
                }
                40% {
                    -webkit-transform: translateY(-30px);
                    transform: translateY(-30px);
                }
                60% {
                    -webkit-transform: translateY(-15px);
                    transform: translateY(-15px);
                }
            }
            @keyframes bounce {
                0%, 20%, 50%, 80%, 100% {
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -webkit-transform: translateY(0);
                    transform: translateY(0);
                }
                40% {
                    -moz-transform: translateY(-30px);
                    -ms-transform: translateY(-30px);
                    -webkit-transform: translateY(-30px);
                    transform: translateY(-30px);
                }
                60% {
                    -moz-transform: translateY(-15px);
                    -ms-transform: translateY(-15px);
                    -webkit-transform: translateY(-15px);
                    transform: translateY(-15px);
                }
            }

            /* Fish Animation */
            svg#fish {
                /*position: relative;*/
            }

            svg.fish{
                overflow: hidden !important;
            }

            @-webkit-keyframes swim
            {
                0% {margin-left: -235px}
                90% {margin-left: 100%;}
                100% {margin-left: 100%;}
            }

            @keyframes swim
            {
                0% {margin-left: -235px}
                70% {margin-left: 100%;}
                100% {margin-left: 100%;}
            }

            .fish{
                width: 235px;
                height: 104px;
                margin-left: -235px;
                position: absolute;
                animation: swim 20s;
                -webkit-animation: swim 20s;
                animation-iteration-count: infinite;
                -webkit-animation-iteration-count: infinite;
                animation-timing-function: linear;
                -webkit-animation-timing-function: linear;
            }

            svg #fish1,
            svg #fish2,
            svg #fish3,
            svg #fish4,
            svg #fish5,
            svg #fish6 {
                fill:#f5f8fa;

                -moz-animation: bounce 2s infinite;
                -webkit-animation: bounce 2s infinite;
                animation: bounce 2s infinite;
            }

            svg #fish2{
                animation-delay: 0.5s;
                -webkit-animation-delay: 0.5s;
            }

            svg #fish3{
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
            }

            svg #fish4{
                animation-delay: 0.4s;
                -webkit-animation-delay: 0.4s;
            }

            svg #fish5{
                animation-delay: 0.1s;
                -webkit-animation-delay: 0.1s;
            }

            svg #fish6{
                animation-delay: 0.3s;
                -webkit-animation-delay: 0.3s;
            }

            /**/
            @-moz-keyframes bounce {
                0%, 50%, 100% {
                    -moz-transform: translateY(0);
                    transform: translateY(0);
                }
                25% {
                    -moz-transform: translateY(-5px);
                    transform: translateY(-5px);
                }
                75% {
                    -moz-transform: translateY(-3px);
                    transform: translateY(-3px);
                }
            }
            @-webkit-keyframes bounce {
                0%, 50%, 100% {
                    -webkit-transform: translateY(0);
                    transform: translateY(0);
                }
                25% {
                    -webkit-transform: translateY(-5px);
                    transform: translateY(-5px);
                }
                75% {
                    -webkit-transform: translateY(-3px);
                    transform: translateY(-3px);
                }
            }
            @keyframes bounce {
                0%, 50%, 100% {
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -webkit-transform: translateY(0);
                    transform: translateY(0);
                }
                25% {
                    -moz-transform: translateY(-5px);
                    -ms-transform: translateY(-5px);
                    -webkit-transform: translateY(-5px);
                    transform: translateY(-5px);
                }
                75% {
                    -moz-transform: translateY(-3px);
                    -ms-transform: translateY(-3px);
                    -webkit-transform: translateY(-3px);
                    transform: translateY(-3px);
                }
            }
            /*END Fish Animation*/
        </style>

        <!-- Scripts -->
        <script type="application/javascript">
            window.fbAsyncInit = function() {
                FB.init({
                    appId      : '218322302188149',
                    cookie     : true,
                    xfbml      : true,
                    version    : 'v3.1'
                });

                FB.AppEvents.logPageView();

            };

            (function(d, s, id){
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {return;}
                js = d.createElement(s); js.id = id;
                js.src = "https://connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5b73f734cd4ff000118eb053&product='inline-share-buttons'" async='async'></script>
    </head>
    <body>
        {{--Load Facebook SDK for JavaScript--}}
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.1&appId=218322302188149&autoLogAppEvents=1';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <nav class="navbar navbar-expand-md navbar-laravel navbar-light bg-white fixed-top" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo.png') }}" class="d-inline-block align-top" alt="Logo Harmoni Karimunjawa">
                    <img src="{{ asset('img/logo_hut_RI_ke73.png') }}" height="50px" class="d-inline-block align-top" alt="Logo HUT RI ke-73">
                    <img src="{{ asset('img/logo_asian_games_2018.png') }}" height="50px" class="d-inline-block align-top" alt="Logo Asian Games 2018">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav" style="font-weight: bolder">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarPaketWisata" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Paket Wisata
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarPaketWisata">
                                <a class="dropdown-item" href="{{ url('/paket-wisata-karimunjawa/karimunjawa-2-hari-1-malam-express-bahari-jepara') }}"> Karimunjawa 2H1M via Express Jepara</a>
                                <a class="dropdown-item" href="{{ url('/paket-wisata-karimunjawa/karimunjawa-2-hari-1-malam-ferry') }}"> Karimunjawa 2H1M via Ferry Jepara <sup><span class="badge badge-secondary">Termurah</span></sup></a>
                                <a class="dropdown-item" href="{{ url('/paket-wisata-karimunjawa/karimunjawa-2-hari-2-malam-pelni') }}"> Karimunjawa 2H2M via Pelni Semarang</a>
                                <a class="dropdown-item" href="{{ url('/paket-wisata-karimunjawa/karimunjawa-3-hari-2-malam-express-bahari-jepara') }}"> Karimunjawa 3H2M via Express Jepara <sup><span class="badge badge-primary">Terbaik</span></sup></a>
                                <a class="dropdown-item" href="{{ url('/paket-wisata-karimunjawa/karimunjawa-3-hari-2-malam-express-bahari-semarang') }}"> Karimunjawa 3H2M via Express Semarang <sup><span class="badge badge-success">Terbaru</span></sup></a>
                                <a class="dropdown-item" href="{{ url('/paket-wisata-karimunjawa/karimunjawa-3-hari-2-malam-kmc-kartini-semarang') }}"> Karimunjawa 3H2M via KMC Kartini Semarang</a>
                                <a class="dropdown-item" href="{{ url('/paket-wisata-karimunjawa/karimunjawa-3-hari-2-malam-ferry') }}"> Karimunjawa 3H2M via Ferry Jepara</a>
                                <a class="dropdown-item" href="{{ url('/paket-wisata-karimunjawa/karimunjawa-4-hari-3-malam-express-bahari-jepara') }}"> Karimunjawa 4H3M via Express Jepara</a>
                                <a class="dropdown-item" href="{{ url('/paket-wisata-karimunjawa/karimunjawa-4-hari-3-malam-ferry') }}"> Karimunjawa 4H3M via Ferry Jepara</a>
                                <div class="dropdown-divider"></div>
                                <span class="dropdown-item-text">Coming soon!</span>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/jadwal-kapal-karimunjawa') }}">Jadwal Kapal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/galeri-foto-video-harmoni-karimunjawa') }}">Galeri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/tentang-harmoni-karimunjawa') }}">Tentang Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main role="main">
            @yield('content')
        </main>

        <footer>
            {{--<div class="pt-5 overflow-hidden">--}}
                {{--<svg class="fish" id="fish">--}}
                    {{--<path--}}
                            {{--id="fish2"--}}
                            {{--d="m 172.04828,20.913839 c 0.0489,-0.444179 -0.2178,-0.896934 -1.01784,-1.415715 -0.72801,-0.475049 -1.4826,-0.932948 -2.2149,-1.401138 -1.6035,-1.028129 -3.29018,-1.969653 -4.89798,-3.079244 -4.67074,-3.24131 -10.22127,-4.404923 -15.76322,-5.1509392 -2.27235,-0.286401 -4.81223,-0.168925 -6.72186,-1.574351 -1.48174,-1.081294 -4.04993,-4.828523 -6.86506,-6.456038 -0.4862,-0.290688 -2.77227,-1.44486897 -2.77227,-1.44486897 0,0 1.30939,3.55000597 1.60951,4.26429497 0.69542,1.644664 -0.38158,3.063809 -0.83262,4.642447 -0.29069,1.0418502 2.13772,0.8129002 2.26463,1.7827212 0.18179,1.432007 -4.15197,1.936211 -6.59152,2.417263 -3.65634,0.715146 -7.91635,2.082841 -11.56925,0.884071 -4.3046,-1.38313 -7.37269,-4.129669 -10.46566,-7.2354952 1.43801,6.7252892 5.4382,10.6028562 5.6157,11.4226162 0.18607,0.905509 -0.45961,1.091584 -1.04099,1.682394 -1.28967,1.265655 -6.91566,7.731125 -6.93366,9.781383 1.61379,-0.247815 3.56115,-1.660957 4.9803,-2.485862 1.58035,-0.905509 7.60593,-5.373029 9.29347,-6.065023 0.38587,-0.160351 5.0549,-1.531476 5.09434,-0.932949 0.0695,0.932949 -0.30784,1.137031 -0.18436,1.527189 0.22638,0.746016 1.44144,1.465449 2.02282,1.985088 1.50918,1.292237 3.21044,2.42841 4.27373,4.156252 1.49203,2.401827 1.55805,4.999163 1.98251,7.677102 0.99469,-0.111473 2.0091,-2.17545 2.55961,-2.992638 0.51278,-0.772598 2.38639,-4.07136 3.09725,-4.275442 0.67227,-0.204082 2.75511,0.958673 3.50284,1.180763 2.85973,0.848057 5.644,1.353976 8.56032,1.353976 3.50799,0.0094 12.726,0.258104 19.55505,-4.800226 0.75545,-0.567658 2.55703,-2.731104 2.55703,-2.731104 0,0 -0.37644,-0.577091 -1.04785,-0.790605 0.89779,-0.584808 1.8659,-1.211633 1.94993,-1.925922 z"--}}
                            {{--style="fill:#f5f8fa;fill-opacity:1"--}}
                            {{--inkscape:connector-curvature="0"--}}
                            {{--sodipodi:nodetypes="cccccccccccccccccccccccccccccccc" />--}}
                    {{--<path--}}
                            {{--sodipodi:nodetypes="cccccccccccccccccccccccccccccccc"--}}
                            {{--inkscape:connector-curvature="0"--}}
                            {{--style="fill:#f5f8fa;fill-opacity:1"--}}
                            {{--d="m 234.99441,42.953992 c 0.0489,-0.44418 -0.2178,-0.896934 -1.01784,-1.415715 -0.72801,-0.47505 -1.4826,-0.932949 -2.2149,-1.401138 -1.6035,-1.02813 -3.29018,-1.969653 -4.89798,-3.079245 -4.67074,-3.24131 -10.22127,-4.404923 -15.76322,-5.150939 -2.27235,-0.286401 -4.81223,-0.168925 -6.72186,-1.574351 -1.48174,-1.081294 -4.04993,-4.828523 -6.86506,-6.456038 -0.4862,-0.290688 -2.77227,-1.444869 -2.77227,-1.444869 0,0 1.30939,3.550006 1.60951,4.264295 0.69542,1.644664 -0.38158,3.063809 -0.83262,4.642447 -0.29069,1.04185 2.13772,0.8129 2.26463,1.782721 0.18179,1.432007 -4.15197,1.936211 -6.59152,2.417263 -3.65634,0.715146 -7.91635,2.082842 -11.56925,0.884072 -4.3046,-1.383131 -7.37269,-4.12967 -10.46566,-7.235496 1.43801,6.725289 5.4382,10.602857 5.6157,11.422617 0.18607,0.905508 -0.45961,1.091583 -1.04099,1.682394 -1.28967,1.265654 -6.91566,7.731125 -6.93366,9.781382 1.61379,-0.247815 3.56115,-1.660957 4.9803,-2.485862 1.58035,-0.905509 7.60593,-5.373029 9.29347,-6.065023 0.38587,-0.160351 5.0549,-1.531476 5.09434,-0.932948 0.0695,0.932948 -0.30784,1.137031 -0.18436,1.527188 0.22638,0.746016 1.44144,1.46545 2.02282,1.985088 1.50918,1.292237 3.21044,2.42841 4.27373,4.156252 1.49203,2.401827 1.55805,4.999163 1.98251,7.677102 0.99469,-0.111473 2.0091,-2.17545 2.55961,-2.992638 0.51278,-0.772598 2.38639,-4.071359 3.09725,-4.275442 0.67227,-0.204082 2.75511,0.958673 3.50284,1.180763 2.85973,0.848057 5.644,1.353976 8.56032,1.353976 3.50799,0.0094 12.726,0.258104 19.55505,-4.800226 0.75545,-0.567658 2.55703,-2.731104 2.55703,-2.731104 0,0 -0.37644,-0.57709 -1.04785,-0.790605 0.89779,-0.584808 1.8659,-1.211633 1.94993,-1.925921 z"--}}
                            {{--id="fish3" />--}}
                    {{--<path--}}
                            {{--id="fish6"--}}
                            {{--d="m 200.07076,80.737109 c 0.0489,-0.44418 -0.2178,-0.896934 -1.01784,-1.415715 -0.72801,-0.47505 -1.4826,-0.932949 -2.2149,-1.401138 -1.6035,-1.02813 -3.29018,-1.969653 -4.89798,-3.079245 -4.67074,-3.24131 -10.22127,-4.404923 -15.76322,-5.150939 -2.27235,-0.286401 -4.81223,-0.168925 -6.72186,-1.574351 -1.48174,-1.081294 -4.04993,-4.828523 -6.86506,-6.456038 -0.4862,-0.290688 -2.77227,-1.444869 -2.77227,-1.444869 0,0 1.30939,3.550006 1.60951,4.264295 0.69542,1.644664 -0.38158,3.063809 -0.83262,4.642447 -0.29069,1.04185 2.13772,0.8129 2.26463,1.782721 0.18179,1.432007 -4.15197,1.936211 -6.59152,2.417263 -3.65634,0.715146 -7.91635,2.082842 -11.56925,0.884072 -4.3046,-1.383131 -7.37269,-4.12967 -10.46566,-7.235496 1.43801,6.725289 5.4382,10.602857 5.6157,11.422617 0.18607,0.905508 -0.45961,1.091583 -1.04099,1.682394 -1.28967,1.265654 -6.91566,7.731125 -6.93366,9.781382 1.61379,-0.247815 3.56115,-1.660957 4.9803,-2.485862 1.58035,-0.905509 7.60593,-5.373029 9.29347,-6.065023 0.38587,-0.160351 5.0549,-1.531476 5.09434,-0.932948 0.0695,0.932948 -0.30784,1.137031 -0.18436,1.527188 0.22638,0.746016 1.44144,1.46545 2.02282,1.985088 1.50918,1.292237 3.21044,2.42841 4.27373,4.156252 1.49203,2.401827 1.55805,4.999163 1.98251,7.677102 0.99469,-0.111473 2.0091,-2.17545 2.55961,-2.992638 0.51278,-0.772598 2.38639,-4.071359 3.09725,-4.275442 0.67227,-0.204082 2.75511,0.958673 3.50284,1.180763 2.85973,0.848057 5.644,1.353976 8.56032,1.353976 3.50799,0.0094 12.726,0.258104 19.55505,-4.800226 0.75545,-0.567658 2.55703,-2.731104 2.55703,-2.731104 0,0 -0.37644,-0.57709 -1.04785,-0.790605 0.89779,-0.584808 1.8659,-1.211633 1.94993,-1.925921 z"--}}
                            {{--style="fill:#f5f8fa;fill-opacity:1"--}}
                            {{--inkscape:connector-curvature="0"--}}
                            {{--sodipodi:nodetypes="cccccccccccccccccccccccccccccccc" />--}}
                    {{--<path--}}
                            {{--sodipodi:nodetypes="cccccccccccccccccccccccccccccccc"--}}
                            {{--inkscape:connector-curvature="0"--}}
                            {{--style="fill:#f5f8fa;fill-opacity:1"--}}
                            {{--d="m 77.275623,89.018799 c 0.0489,-0.44418 -0.2178,-0.896934 -1.01784,-1.415715 -0.72801,-0.47505 -1.4826,-0.932949 -2.2149,-1.401138 -1.6035,-1.02813 -3.29018,-1.969653 -4.89798,-3.079245 -4.67074,-3.24131 -10.22127,-4.404923 -15.76322,-5.150939 -2.272347,-0.286401 -4.812227,-0.168925 -6.721857,-1.574351 -1.48174,-1.081294 -4.04993,-4.828523 -6.86506,-6.456038 -0.4862,-0.290688 -2.77227,-1.444869 -2.77227,-1.444869 0,0 1.30939,3.550006 1.60951,4.264295 0.69542,1.644664 -0.38158,3.063809 -0.83262,4.642447 -0.29069,1.04185 2.13772,0.8129 2.26463,1.782721 0.18179,1.432007 -4.15197,1.936211 -6.59152,2.417263 -3.65634,0.715146 -7.91635,2.082842 -11.56925,0.884072 -4.3046,-1.383131 -7.37269,-4.12967 -10.46566,-7.235496 1.43801,6.725289 5.4382,10.602857 5.6157,11.422617 0.18607,0.905508 -0.45961,1.091583 -1.04099,1.682394 -1.28967,1.265654 -6.9156603,7.731122 -6.9336603,9.781382 1.6137903,-0.24782 3.5611503,-1.66096 4.9803003,-2.48586 1.58035,-0.90551 7.60593,-5.37303 9.29347,-6.065025 0.38587,-0.160351 5.0549,-1.531476 5.09434,-0.932948 0.0695,0.932948 -0.30784,1.137031 -0.18436,1.527183 0.22638,0.74602 1.44144,1.46546 2.02282,1.98509 1.50918,1.29224 3.21044,2.42841 4.27373,4.15625 1.49203,2.40183 1.55805,4.999171 1.98251,7.677111 0.99469,-0.11148 2.0091,-2.17545 2.55961,-2.99264 0.51278,-0.7726 2.38639,-4.071361 3.09725,-4.275441 0.67227,-0.20408 2.75511,0.95867 3.50284,1.18076 2.85973,0.84806 5.644,1.35398 8.560317,1.35398 3.50799,0.009 12.726,0.2581 19.55505,-4.80023 0.75545,-0.56766 2.55703,-2.7311 2.55703,-2.7311 0,0 -0.37644,-0.57709 -1.04785,-0.79061 0.89779,-0.58481 1.8659,-1.211632 1.94993,-1.92592 z"--}}
                            {{--id="fish4" />--}}
                    {{--<path--}}
                            {{--id="fish5"--}}
                            {{--d="m 127.65312,60.900973 c 0.0489,-0.44418 -0.2178,-0.896934 -1.01784,-1.415715 -0.72801,-0.47505 -1.4826,-0.932949 -2.2149,-1.401138 -1.6035,-1.02813 -3.29018,-1.969653 -4.89799,-3.079245 -4.67074,-3.24131 -10.22127,-4.404923 -15.76322,-5.150939 -2.27235,-0.286401 -4.812228,-0.168925 -6.721858,-1.574351 -1.48174,-1.081294 -4.04993,-4.828523 -6.86506,-6.456038 -0.4862,-0.290688 -2.77227,-1.444869 -2.77227,-1.444869 0,0 1.30939,3.550006 1.60951,4.264295 0.69542,1.644664 -0.38158,3.063809 -0.83262,4.642447 -0.29069,1.04185 2.13772,0.8129 2.26463,1.782721 0.18179,1.432007 -4.15197,1.936211 -6.59152,2.417263 -3.65634,0.715146 -7.91635,2.082842 -11.56925,0.884072 -4.3046,-1.383131 -7.37269,-4.12967 -10.46566,-7.235496 1.43801,6.725289 5.4382,10.602857 5.6157,11.422617 0.18607,0.905508 -0.45961,1.091583 -1.04099,1.682394 -1.28967,1.265654 -6.91566,7.731125 -6.93366,9.781382 1.61379,-0.247815 3.56115,-1.660957 4.9803,-2.485862 1.58035,-0.905509 7.60593,-5.373029 9.29347,-6.065023 0.38587,-0.160351 5.0549,-1.531476 5.09434,-0.932948 0.0695,0.932948 -0.30784,1.137031 -0.18436,1.527188 0.22638,0.746016 1.44144,1.46545 2.02282,1.985088 1.50918,1.292237 3.21044,2.42841 4.27373,4.156252 1.49203,2.401827 1.55805,4.999163 1.98251,7.677102 0.99469,-0.111473 2.0091,-2.17545 2.55961,-2.992638 0.51278,-0.772598 2.38639,-4.071359 3.09725,-4.275442 0.67227,-0.204082 2.75511,0.958673 3.50284,1.180763 2.85973,0.848057 5.643998,1.353976 8.560318,1.353976 3.50799,0.0094 12.726,0.258104 19.55506,-4.800226 0.75545,-0.567658 2.55703,-2.731104 2.55703,-2.731104 0,0 -0.37644,-0.57709 -1.04785,-0.790605 0.89779,-0.584808 1.8659,-1.211633 1.94993,-1.925921 z"--}}
                            {{--style="fill:#f5f8fa;fill-opacity:1"--}}
                            {{--inkscape:connector-curvature="0"--}}
                            {{--sodipodi:nodetypes="cccccccccccccccccccccccccccccccc" />--}}
                    {{--<path--}}
                            {{--d="m 68.19699,20.522295 c 0.0489,-0.44418 -0.2178,-0.896934 -1.01784,-1.415715 -0.72801,-0.47505 -1.4826,-0.932949 -2.2149,-1.401138 -1.6035,-1.02813 -3.29018,-1.969653 -4.89798,-3.079245 C 55.39553,11.384887 49.845,10.221274 44.30305,9.4752582 42.0307,9.1888572 39.49082,9.3063332 37.58119,7.900907 36.09945,6.819613 33.53126,3.072384 30.71613,1.444869 30.22993,1.154181 27.94386,0 27.94386,0 c 0,0 1.30939,3.550006 1.60951,4.264295 0.69542,1.644664 -0.38158,3.063809 -0.83262,4.642447 -0.29069,1.0418502 2.13772,0.8129002 2.26463,1.782721 0.18179,1.432007 -4.15197,1.936211 -6.59152,2.417263 -3.65634,0.715146 -7.91635,2.082842 -11.56925,0.884072 C 8.52001,12.607667 5.45192,9.8611282 2.35895,6.755302 3.79696,13.480591 7.79715,17.358159 7.97465,18.177919 8.16072,19.083427 7.51504,19.269502 6.93366,19.860313 5.64399,21.125967 0.018,27.591438 0,29.641695 1.61379,29.39388 3.56115,27.980738 4.9803,27.155833 c 1.58035,-0.905509 7.60593,-5.373029 9.29347,-6.065023 0.38587,-0.160351 5.0549,-1.531476 5.09434,-0.932948 0.0695,0.932948 -0.30784,1.137031 -0.18436,1.527188 0.22638,0.746016 1.44144,1.46545 2.02282,1.985088 1.50918,1.292237 3.21044,2.42841 4.27373,4.156252 1.49203,2.401827 1.55805,4.999163 1.98251,7.677102 0.99469,-0.111473 2.0091,-2.17545 2.55961,-2.992638 0.51278,-0.772598 2.38639,-4.071359 3.09725,-4.275442 0.67227,-0.204082 2.75511,0.958673 3.50284,1.180763 2.85973,0.848057 5.644,1.353976 8.56032,1.353976 3.50799,0.0094 12.726,0.258104 19.55505,-4.800226 0.75545,-0.567658 2.55703,-2.731104 2.55703,-2.731104 0,0 -0.37644,-0.57709 -1.04785,-0.790605 0.89779,-0.584808 1.8659,-1.211633 1.94993,-1.925921 z"--}}
                            {{--id="fish1" />--}}
                {{--</svg>--}}
            {{--</div>--}}
            <div class="container py-5">
                <div class="row">
                    <div class="col-12 col-md border-right">
                        <img src="{{ asset('img/logo.png') }}" id="Logo Harmoni Karimunjawa">
                        <small class="d-block mb-3 text-muted">{{ config('app.name') }} &copy; {{ date('Y') }}</small>
                    </div>
                    <div class="col-12 col-md">
                        <h4>Paket Wisata Karimunjawa</h4>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="{{ url('/paket-wisata-karimunjawa/karimunjawa-2-hari-1-malam-express-bahari-jepara') }}"> &blacktriangleright; 2H1M via Express Jepara <span class="sr-only">Paket Karimunjawa 2 Hari 1 Malam Express Bahari Jepara</span></a></li>
                            <li><a class="text-muted" href="{{ url('/paket-wisata-karimunjawa/karimunjawa-2-hari-1-malam-ferry') }}"> &blacktriangleright; 2H1M via Ferry Jepara <span class="sr-only">Paket Karimunjawa 2 Hari 1 Malam Ferry Jepara</span></a></li>
                            <li><a class="text-muted" href="{{ url('/paket-wisata-karimunjawa/karimunjawa-2-hari-2-malam-pelni') }}"> &blacktriangleright; 2H2M via Pelni Semarang <span class="sr-only">Paket Karimunjawa 2 Hari 2 Malam Pelni Semarang</span></a></li>
                            <li><a class="text-muted" href="{{ url('/paket-wisata-karimunjawa/karimunjawa-3-hari-2-malam-express-bahari-jepara') }}"> &blacktriangleright; 3H2M via Express Jepara <span class="sr-only">Paket Karimunjawa 3 Hari 2 Malam Express Bahari Jepara</span></a></li>
                            <li><a class="text-muted" href="{{ url('/paket-wisata-karimunjawa/karimunjawa-3-hari-2-malam-express-bahari-semarang') }}"> &blacktriangleright; 3H2M via Express Semarang <span class="sr-only">Paket Karimunjawa 3 Hari 2 Malam Express Bahari Semarang</span></a></li>
                            <li><a class="text-muted" href="{{ url('/paket-wisata-karimunjawa/karimunjawa-3-hari-2-malam-kmc-kartini-semarang') }}"> &blacktriangleright; 3H2M via KMC Kartini Semarang <span class="sr-only">Paket Karimunjawa 3 Hari 2 Malam KMC Kartini Semarang</span></a></li>
                            <li><a class="text-muted" href="{{ url('/paket-wisata-karimunjawa/karimunjawa-3-hari-2-malam-ferry') }}"> &blacktriangleright; 3H2M via Ferry Jepara <span class="sr-only">Paket Karimunjawa 3 Hari 2 Malam Ferry Jepara</span></a></li>
                            <li><a class="text-muted" href="{{ url('/paket-wisata-karimunjawa/karimunjawa-4-hari-3-malam-express-bahari-jepara') }}"> &blacktriangleright; 4H3M via Express Jepara <span class="sr-only">Paket Karimunjawa 4 Hari 3 Malam Express Bahari Jepara</span></a></li>
                            <li><a class="text-muted" href="{{ url('/paket-wisata-karimunjawa/karimunjawa-4-hari-3-malam-ferry') }}"> &blacktriangleright; 4H3M via Ferry Jepara <span class="sr-only">Paket Karimunjawa 4 Hari 3 Malam Ferry Jepara</span></a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md">
                        <h4>Hubungi Kami</h4>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" target="_blank" href="https://web.whatsapp.com/send?phone=6282325982567"><i class="fa fa-whatsapp"></i> (+62) 82325982567</a></li>
                            <li><a class="text-muted" target="_blank" href="https://instagram.com/harmoni.karimunjawa"><i class="fa fa-instagram"></i> @harmoni.karimunjawa</a></li>
                            <li><a class="text-muted" target="_top" href="https://facebook.com/harmoni.karimunjawa"><i class="fa fa-facebook"></i> /harmoni.karimunjawa</a></li>
                            <li><a class="text-muted" target="_blank" href="mailto:halo@harmonikarimunjawa.com?Subject=Halo%20min,"><i class="icon ion-ios-mail"></i> halo@harmonikarimunjawa.com</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md">
                        <h4>Lebih Lanjut</h4>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="{{ url('/tentang-harmoni-karimunjawa') }}"><i class="icon ion-ios-person"></i> Tentang Kami</a></li>
                            <li><a class="text-muted" target="_blank" href="https://goo.gl/maps/roCJauzbVSN2"><i class="icon ion-ios-home"></i> Lokasi Kantor</a></li>
                            <li><a class="text-muted" href="{{ url('/galeri-foto-video-harmoni-karimunjawa') }}"><i class="icon ion-ios-camera"></i> Dokumentasi Trip</a></li>
                            <li><a class="text-muted" href="{{ url('/testimoni-harmoni-karimunjawa') }}"><i class="icon ion-ios-chatbubbles"></i> Testimoni</a></li>
                            <li><a class="text-muted" href="{{ url('/syarat-ketentuan-trip-harmoni-karimunjawa') }}"><i class="icon ion-ios-warning"></i> Syarat & Ketentuan</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>

        <script type="text/javascript">
            $( document ).ready(function() {
                // Navigation active
                {{--$('ul.navbar-nav a[href="{{ "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" }}"]').closest('li').addClass('active');--}}
                {{--$('li.dropdown a[href="{{ "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" }}"]').addClass('active');--}}

                $("ul.navbar-nav a").filter(function(){
                    return this.href == location.href.replace(/#.*/, "");
                }).closest('li').addClass("active");

                $("li.dropdown a").filter(function(){
                    return this.href == location.href.replace(/#.*/, "");
                }).addClass("active");

                var prevScrollpos = window.pageYOffset;
                window.onscroll = function() {
                    var currentScrollPos = window.pageYOffset;
                    if (prevScrollpos > currentScrollPos) {
                        document.getElementById("navbar").style.top = "0";
                    } else {
                        document.getElementById("navbar").style.top = "-100px";
                    }
                    prevScrollpos = currentScrollPos;
                }
            });
        </script>

        <script type="text/javascript">
            (function () {
                var options = {
                    whatsapp: "+6282325982567", // WhatsApp number
                    call_to_action: "Mulai chat", // Call to action
                    position: "right", // Position may be 'right' or 'left'
                };
                var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
                var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
                s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
                var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
            })();
        </script>

        @yield('scripts')
    </body>
</html>
