@extends('layouts.web')

@section('content')
    <div class="fullscreen-bg">
        <video playsinline loop muted autoplay poster="{{ asset('img/LogoLicious_20180609_210403.png') }}" class="fullscreen-bg__video">
            <source src="{{ asset('video/Harmoni_Karimun.mp4') }}" type="video/mp4">
        </video>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('{{ asset('img/LogoLicious_20180609_205447.png') }}')">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Sunset yang Romantis</h2>
                    <p>Karimunjawa menyajikan pemandangan matahari terbenam terbaik di Indonesia, bahkan di dunia.</p>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('{{ asset('img/LogoLicious_20180609_200353.png') }}')">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Pantai yang Cantik</h2>
                    <p>Di Karimunjawa, Anda dapat menikmati hamparan pasir putih yang lembut dan birunya air laut yang menenangkan hati.</p>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('{{ asset('img/LogoLicious_20180609_195841.png') }}')">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Pemandangan yang Memukau</h2>
                    <p>Tour Darat dan Tour Laut di Karimunjawa menyajikan pemandangan yang memukau mata.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="full-height"></div>

    <div class="bg-light" id="paketWisata">
        <div class="pt-5">
            <div class="title m-b-md text-center">
                Pilih Paketnya!
            </div>
            <p class="lead text-center">Start Semarang / Jepara</p>
            <div class="bounce">
                <h1 class="text-center">&DoubleDownArrow;&DoubleDownArrow;&DoubleDownArrow;&DoubleDownArrow;&DoubleDownArrow;</h1>
            </div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 text-center">
            <div class="bg-success mr-md-3 pt-3 px-3 pt-md-5 px-md-5 welcome-paket overflow-hidden shadow-sm">
                <div class="my-3 py-3">
                    <a href="{{ route('by-plane-trip') }}" class="text-white" style="text-decoration: none">
                        <h1 class="display-5">Via Bandara Semarang <sup><span class="badge badge-light">Terbaru</span></sup><span class="sr-only">Karimunjawa via Bandara Semarang dengan Pesawat</span></h1>
                        <p class="lead">Mulai dari Rp 760.000 ++</p>
                        <hr class="shadow-sm">
                    </a>
                </div>
                {{--<div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>--}}
            </div>
            <div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 welcome-paket overflow-hidden shadow-sm" style="background-color: hotpink">
                <div class="my-3 p-3">
                    <a href="{{ route('honeymoon-trip') }}" style="text-decoration: none; color: antiquewhite;">
                        <h1 class="display-5">Honeymoon Trip <span class="sr-only">Honeymoon Trip Harmoni Karimunjawa</span></h1>
                        <p class="lead">Mulai dari Rp 4.865.000 ++</p>
                        <hr class="shadow-sm">
                    </a>
                </div>
                {{--<div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>--}}
            </div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 text-center">
            <div class="bg-white border border-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 welcome-paket overflow-hidden shadow-sm">
                <div class="my-3 py-3">
                    <a href="{{ route('2h1m-ebj') }}" style="text-decoration: none">
                        <h1 class="display-5">2H1M via Express Jepara <span class="sr-only">Karimunjawa 2 Hari 1 Malam Express Bahari Jepara</span></h1>
                        <p class="lead">Mulai dari Rp 780.000 ++</p>
                        <hr class="shadow-sm">
                    </a>
                </div>
                {{--<div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>--}}
            </div>
            <div class="bg-secondary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 welcome-paket overflow-hidden shadow-sm">
                <div class="my-3 p-3">
                    <a href="{{ route('2h1m-ferry') }}" class="text-white" style="text-decoration: none">
                        <h1 class="display-5">2H1M via Ferry Jepara <sup><span class="badge badge-light">Termurah</span></sup><span class="sr-only">Karimunjawa 2 Hari 1 Malam Ferry</span></h1>
                        <p class="lead">Mulai dari Rp 635.000 ++</p>
                        <hr class="shadow-sm">
                    </a>
                </div>
                {{--<div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>--}}
            </div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 text-center">
            <div class="bg-white mr-md-3 pt-3 px-3 pt-md-5 px-md-5 welcome-paket overflow-hidden shadow-sm">
                <div class="my-3 py-3">
                    <a href="{{ route('2h2m-pelni') }}" style="text-decoration: none">
                        <h1 class="display-5">2H2M via Pelni Semarang <span class="sr-only">Karimunjawa 2 Hari 2 Malam Pelni</span></h1>
                        <p class="lead">Mulai dari Rp 700.000 ++</p>
                        <hr class="shadow-sm">
                    </a>
                </div>
                {{--<div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>--}}
            </div>
            <div class="bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 welcome-paket overflow-hidden shadow-sm">
                <div class="my-3 p-3">
                    <a href="{{ route('3h2m-ebj') }}" class="text-white" style="text-decoration: none">
                        <h1 class="display-5">3H2M via Express Jepara <sup><span class="badge badge-light">Terbaik</span></sup><span class="sr-only">Karimunjawa 2 Hari 2 Malam Express Bahari Jepara</span></h1>
                        <p class="lead">Mulai dari Rp 930.000 ++</p>
                        <hr class="shadow-sm">
                    </a>
                </div>
                {{--<div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>--}}
            </div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 text-center">
            <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 welcome-paket overflow-hidden shadow-sm">
                <div class="my-3 py-3 text-white-50">
                    <h1 class="display-5"><s>3H2M via Express Semarang <span class="sr-only">Karimunjawa 3 Hari 2 Malam Express Bahari Semarang</span></s></h1>
                    <p class="lead">Sementara tidak tersedia <span class="sr-only">Temporary unavailable</span></p>
                    <hr class="shadow-sm">
                </div>
                {{--<div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>--}}
            </div>
            <div class="bg-white mr-md-3 pt-3 px-3 pt-md-5 px-md-5 welcome-paket overflow-hidden shadow-sm">
                <div class="my-3 p-3">
                    <a href="{{ route('3h2m-kmc') }}" style="text-decoration: none">
                        <h1 class="display-5">3H2M via KMC Kartini Semarang <span class="sr-only">Karimunjawa 3 Hari 2 Malam KMC Kartini Semarang</span></h1>
                        <p class="lead">Mulai dari Rp 910.000 ++</p>
                        <hr class="shadow-sm">
                    </a>
                </div>
                {{--<div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>--}}
            </div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 text-center">
            <div class="bg-white mr-md-3 pt-3 px-3 pt-md-5 px-md-5 welcome-paket overflow-hidden shadow-sm">
                <div class="my-3 py-3">
                    <a href="{{ route('3h2m-ferry') }}" style="text-decoration: none">
                        <h1 class="display-5">3H2M via Ferry Jepara <span class="sr-only">Karimunjawa 3 Hari 2 Malam Ferry</span></h1>
                        <p class="lead">Mulai dari Rp 785.000 ++</p>
                        <hr class="shadow-sm">
                    </a>
                </div>
                {{--<div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>--}}
            </div>
            <div class="bg-white mr-md-3 pt-3 px-3 pt-md-5 px-md-5 welcome-paket overflow-hidden shadow-sm">
                <div class="my-3 p-3">
                    <a href="{{ route('4h3m-ferry') }}" style="text-decoration: none">
                        <h1 class="display-5">4H3M via Ferry Jepara <span class="sr-only">Karimunjawa 4 Hari 3 Malam Ferry</span></h1>
                        <p class="lead">Mulai dari Rp 910.000 ++</p>
                        <hr class="shadow-sm">
                    </a>
                </div>
                {{--<div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>--}}
            </div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 text-center">
            <div class="bg-white mr-md-3 pt-3 px-3 pt-md-5 px-md-5 welcome-paket overflow-hidden shadow-sm">
                <div class="my-3 py-3">
                    <a href="{{ route('4h3m-ebj') }}" style="text-decoration: none">
                        <h1 class="display-5">4H3M via Express Jepara <span class="sr-only">Karimunjawa 4 Hari 3 Malam Express Bahari Jepara</span></h1>
                        <p class="lead">Mulai dari Rp 1.055.000 ++</p>
                        <hr class="shadow-sm">
                    </a>
                </div>
                {{--<div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>--}}
            </div>
            <div class="bg-white mr-md-3 pt-3 px-3 pt-md-5 px-md-5 welcome-paket overflow-hidden shadow-sm">
                <div class="my-3 p-3">
                    <a href="{{ route('open-trip') }}" style="text-decoration: none">
                        <h1 class="display-5">Open Trip <span class="sr-only">Open Trip Harmoni Karimunjawa</span></h1>
                        <p class="lead">Mulai dari Rp 600.000 ++</p>
                        <hr class="shadow-sm">
                    </a>
                </div>
                {{--<div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>--}}
            </div>
        </div>

        <hr class="shadow-sm my-3">
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="{{ env('ELFSIGHT_APIKEY') }}"></div>
    </div>
@endsection