<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-62925656-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-62925656-3');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#1e90ff">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Harmoni Karimunjawa') }} | Paket Wisata Karimunjawa 2H1M, 2H2M, 3H2M, 4H3M via Ferry Siginjai, Express Bahari, KMC Kartini</title>

    <meta name="description" content="Paket Wisata Karimunjawa 2H1M, 2H2M, 3H2M, 4H3M via Ferry Siginjai, Express Bahari, KMC Kartini">

    <meta property="og:title" content="Harmoni Karimunjawa | Paket Wisata Karimunjawa Open Trip Karimunjawa 2H1M 2H2M 3H2M 4H3M" />
    <meta property="og:description" content="Paket Wisata Karimunjawa Open Trip Karimunjawa 2H1M 2H2M 3H2M 4H3M" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ URL::current()  }}" />
    <meta property="og:image" content="{{ asset('img/LogoLicious_20180609_210403.png') }}" />
    <meta property="fb:app_id" content="218322302188149" />

    <meta name="twitter:title" content="Harmoni Karimunjawa">
    <meta name="twitter:description" content="Paket Wisata Karimunjawa, Open Trip Karimunjawa 2H1M 2H2M 3H2M 4H3M.">
    <meta name="twitter:image" content="{{ asset('img/LogoLicious_20180609_210403.png') }}">
    <meta name="twitter:card" content="summary_large_image">

    <meta name="google-site-verification" content="DjP4iRt1HFHwd_vwNr4Y61jgE0UegBgKgy1sFw94Y-g" />

    <link rel="canonical" href="{{ config('app.url', 'https://www.harmonikarimunjawa.com') }}"/>
    <link rel="manifest" href="/manifest.json" />
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" />
    <link rel="icon" sizes="192x192" href="{{ asset('img/logo192.png') }}" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel=preload href="{{ asset('fonts/vendor/font-awesome/fontawesome-webfont.woff2') }}">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background: url("{!! asset('img/just-waves.png') !!}");
        }
        #navbar {
            transition: top 0.5s;
            border-bottom: thin inset dodgerblue;
            padding: 0 1rem;
        }
        .nav-link {
            display: block;
            padding: 1.5rem 1rem;
            font-size: medium;
            margin: 0 0.5rem;
        }
        .nav-item:hover {
            border-top: thin solid dodgerblue;
        }
        .navbar-light .navbar-nav .show > .nav-link, .navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .nav-link.active {
            background: dodgerblue;
            color: white;
            font-weight: bolder;
            border-top: thin solid dodgerblue;
            padding: 1.5rem;
        }
        .dropdown-item:hover, .dropdown-item:focus {
            background: dodgerblue;
            color: white;
            text-decoration: none;
        }
        .full-height {
            height: 100vh;
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
        .fullscreen-bg {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            overflow: hidden;
            z-index: -100;
        }
        .fullscreen-bg__video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        @media (min-aspect-ratio: 16/9) {
            .fullscreen-bg__video {
                height: 300%;
                top: -100%;
            }
        }
        @media (max-aspect-ratio: 16/9) {
            .fullscreen-bg__video {
                width: 300%;
                left: -100%;
            }
        }
        @media (max-width: 767px) {
            .fullscreen-bg {
                background: url("{{ asset('img/LogoLicious_20180609_210403.png') }}") center center / cover no-repeat;
            }
            .fullscreen-bg__video {
                display: none;
            }
        }
    </style>

    @stack('css')

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
</head>
<body>
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
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
                <img src="{{ asset('img/logo.png') }}" class="d-inline-block align-top" height="50px" alt="Logo Harmoni Karimunjawa">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="font-weight: bolder">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarPaketWisata" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Paket Wisata
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarPaketWisata">
                            <a class="dropdown-item" href="{{ route('by-plane-trip') }}">Karimunjawa via Bandara Semarang</a>
                            <a class="dropdown-item" href="{{ route('2h1m-ebj') }}">Karimunjawa 2H1M via Express Jepara</a>
                            <a class="dropdown-item" href="{{ route('2h1m-ferry') }}">Karimunjawa 2H1M via Ferry Jepara <sup class="badge badge-danger">Termurah</sup></a>
                            <a class="dropdown-item" href="{{ route('2h2m-pelni') }}">Karimunjawa 2H2M via Pelni Semarang</a>
                            <a class="dropdown-item" href="{{ route('3h2m-ebj') }}">Karimunjawa 3H2M via Express Jepara <sup class="badge badge-primary">Terbaik</sup></a>
                            <a class="dropdown-item" href="{{ route('3h2m-kmc') }}">Karimunjawa 3H2M via KMC Kartini Semarang</a>
                            <a class="dropdown-item" href="{{ route('3h2m-ferry') }}">Karimunjawa 3H2M via Ferry Jepara</a>
                            <a class="dropdown-item" href="{{ route('4h3m-ebj') }}">Karimunjawa 4H3M via Express Jepara</a>
                            <a class="dropdown-item" href="{{ route('4h3m-ferry') }}">Karimunjawa 4H3M via Ferry Jepara</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('honeymoon-trip') }}">Honeymoon Trip</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('family-trip') }}">Family Trip <sup class="badge badge-success">Terbaru</sup></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('open-trip') }}">Open Trip</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tnc') }}">Syarat & Ketentuan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main role="main">
        @yield('content')
    </main>

    <footer>
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md border-right">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo Harmoni Karimunjawa">
                    <small class="d-block mb-3 text-muted">{{ config('app.name') }} &copy; {{ date('Y') }}</small>
                </div>
                <div class="col-12 col-md">
                    <h4>Paket Wisata Karimunjawa</h4>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="{{ route('2h1m-ebj') }}">Express Jepara 2H1M<span class="sr-only">Paket Karimunjawa 2 Hari 1 Malam Express Bahari Jepara</span></a></li>
                        <li><a class="text-muted" href="{{ route('2h1m-ferry') }}">Ferry Jepara 2H1M<span class="sr-only">Paket Karimunjawa 2 Hari 1 Malam Ferry Jepara</span></a></li>
                        <li><a class="text-muted" href="{{ route('2h2m-pelni') }}">Pelni Semarang 2H2M<span class="sr-only">Paket Karimunjawa 2 Hari 2 Malam Pelni Semarang</span></a></li>
                        <li><a class="text-muted" href="{{ route('3h2m-ebj') }}">Express Jepara 3H2M<span class="sr-only">Paket Karimunjawa 3 Hari 2 Malam Express Bahari Jepara</span></a></li>
                        <li><a class="text-muted" href="{{ route('3h2m-ferry') }}">Ferry Jepara 3H2M<span class="sr-only">Paket Karimunjawa 3 Hari 2 Malam Ferry Jepara</span></a></li>
                        <li><a class="text-muted" href="{{ route('4h3m-ebj') }}">Express Jepara 4H3M<span class="sr-only">Paket Karimunjawa 4 Hari 3 Malam Express Bahari Jepara</span></a></li>
                        <li><a class="text-muted" href="{{ route('4h3m-ferry') }}">Ferry Jepara 4H3M<span class="sr-only">Paket Karimunjawa 4 Hari 3 Malam Ferry Jepara</span></a></li>
                    </ul>
                </div>
                <div class="col-12 col-md">
                    <h4>Hubungi Kami</h4>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" target="_blank" href="https://web.whatsapp.com/send?phone=6282325982567"><i class="fa fa-whatsapp"></i> (+62) 82325982567</a></li>
                        <li><a class="text-muted" target="_blank" href="https://instagram.com/harmoni.karimunjawa"><i class="fa fa-instagram"></i> @harmoni.karimunjawa</a></li>
                        <li><a class="text-muted" target="_blank" href="https://facebook.com/harmoni.karimunjawa"><i class="fa fa-facebook"></i> /harmoni.karimunjawa</a></li>
                        <li><a class="text-muted" target="_top" href="mailto:harmonikarimunjawa@gmail.com?Subject=Halo%20Mas%20Tri%20Karimun,">harmonikarimunjawa@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md">
                    <h4>Lebih Lanjut</h4>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="{{ route('about') }}">Tentang Kami</a></li>
                        <li><a class="text-muted" target="_blank" href="https://goo.gl/maps/roCJauzbVSN2">Lokasi Kantor</a></li>
                        <li><a class="text-muted" href="{{ route('boat-schedule') }}">Jadwal Kapal</a></li>
                        <li><a class="text-muted" href="{{ route('gallery') }}">Dokumentasi Trip</a></li>
                        <li><a class="text-muted" href="{{ route('testimony') }}">Testimoni Peserta</a></li>
                        <li><a class="text-muted" href="{{ route('tnc') }}">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                maximumSignificantDigits: 9
            }).format($('.price').html());

            // Navigation active
            $("ul.navbar-nav a").filter(function(){
                return this.href === location.href.replace(/#.*/, "");
            }).closest('li').addClass('active');

            $("li.dropdown a").filter(function(){
                return this.href === location.href.replace(/#.*/, "");
            }).addClass('active');

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
