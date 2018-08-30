@extends('layouts.web')

@section('content')
    <div class="fullscreen-bg">
        <video playsinline loop muted autoplay poster="{{ asset('img/LogoLicious_20180609_210403.png') }}" class="fullscreen-bg__video">
            <source src="{{ asset('video/Harmoni Karimunjawa.mp4') }}" type="video/mp4">
        </video>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
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

    <div class="container py-5">
        <div class="card shadow-sm text-center">
            <div class="card-body">
                <div class="card-text">
                    <div class="title m-b-md">
                        Selamat Datang di Karimunjawa
                    </div>
                    <b>Taman Nasional Kepulauan Karimunjawa</b> berada di titik koordinat 5°49′LU 110°24′BT﻿ / ﻿5,817°LS 110,4°BT.
                    <br>
                    Pulau dengan luas keseluruhan lebih dari 100.000 Hektar dan di huni hampir 10.000 jiwa ini berada dibawah administrasi Kabupaten Jepara - Jawa Tengah.
                    <b>Kepulauan Karimunjawa</b> dikelilingi 27 gugusan pulau-pulau kecil dengan beberapa diantaranya menjadi spot pupuler untuk di kunjungi Turis dari berbagai Negara.
                    Keindahan alam <b>Kepulauan Karimunjawa</b> sudah di kenal dunia sejak era tahun 80an. Akses untuk menuju <b>Kepulauan Karimunjawa</b> bisa dilakukan dari Jepara dengan penyeberangan kapal yang hampir ada setiap hari atau Semarang pada waktu - waktu tertentu, tetapi perlu diketahui untuk berkunjung ke pulau ini tidak mudah dilakukan ketika akhir pekan dan musim libur sekolah atau nasional mengingat animo wisatawan yang berminat datang ke <b>Kepulauan Karimunjawa</b> saat ini begitu besar.
                    Dari pertimbangan inilah <span> <img src="{{ asset('img/logo.png') }}" id="Logo Harmoni Karimunjawa" alt="Logo Harmoni Karimunjawa"> </span> bertekad menjembatani Anda agar lebih mudah dan menyenangkan ketika mengunjungi <b>Taman Nasional Karimunjawa</b>.
                    <br>
                    Segera pilih <a href="{{ url('/paket-wisata') }}" style="font-size: larger; text-decoration: underline"><b>Paket Wisata</b></a> dari kami sesuai dengan yang Anda butuhkan.
                </div>
            </div>
        </div>
    </div>

    <div class="full-height"></div>

    <div class="bg-light" style="background: #f5f8fa">
        <div class="pt-5">
            <div class="title m-b-md text-center">
                Pilih Paketnya!
            </div>
            <p align="center" class="lead">Start Semarang / Jepara</p>
            <div class="bounce">
                <h1 align="center">&DoubleDownArrow;&DoubleDownArrow;&DoubleDownArrow;&DoubleDownArrow;&DoubleDownArrow;</h1>
            </div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 text-center">
            <div class="bg-white border border-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 welcome-paket overflow-hidden shadow-sm">
                <div class="my-3 py-3">
                    <a href="{{ url('/paket-wisata-karimunjawa/karimunjawa-2-hari-1-malam-express-bahari-jepara') }}" style="text-decoration: none">
                        <h1 class="display-5">2H1M via Express Jepara</sup><span class="sr-only">Karimunjawa 2 Hari 1 Malam Express Bahari Jepara</span></h1>
                        <p class="lead">Mulai dari Rp. 760.000,- ++</p>
                        <hr class="shadow-sm">
                    </a>
                </div>
                {{--<div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>--}}
            </div>
            <div class="bg-secondary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 welcome-paket overflow-hidden shadow-sm">
                <div class="my-3 p-3">
                    <a href="{{ url('/paket-wisata-karimunjawa/karimunjawa-2-hari-1-malam-ferry') }}" class="text-white" style="text-decoration: none">
                        <h1 class="display-5">2H1M via Ferry Jepara <sup><span class="badge badge-light">Termurah</span><span class="sr-only">Karimunjawa 2 Hari 1 Malam Ferry</span></h1>
                        <p class="lead">Mulai dari Rp. 600.000,- ++</p>
                        <hr class="shadow-sm">
                    </a>
                </div>
                {{--<div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>--}}
            </div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 text-center">
            <div class="bg-white mr-md-3 pt-3 px-3 pt-md-5 px-md-5 welcome-paket overflow-hidden shadow-sm">
                <div class="my-3 py-3">
                    <a href="{{ url('/paket-wisata-karimunjawa/karimunjawa-2-hari-2-malam-pelni') }}" style="text-decoration: none">
                        <h1 class="display-5">2H2M via Pelni Semarang <span class="sr-only">Karimunjawa 2 Hari 2 Malam Pelni</span></h1>
                        <p class="lead">Mulai dari Rp. 700.000,- ++</p>
                        <hr class="shadow-sm">
                    </a>
                </div>
                {{--<div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>--}}
            </div>
            <div class="bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 welcome-paket overflow-hidden shadow-sm">
                <div class="my-3 p-3">
                    <a href="{{ url('/paket-wisata-karimunjawa/karimunjawa-3-hari-2-malam-express-bahari-jepara') }}" class="text-white" style="text-decoration: none">
                        <h1 class="display-5">3H2M via Express Jepara <sup><span class="badge badge-light">Terbaik</span></sup><span class="sr-only">Karimunjawa 2 Hari 2 Malam Express Bahari Jepara</span></h1>
                        <p class="lead">Mulai dari Rp. 910.000,- ++</p>
                        <hr class="shadow-sm">
                    </a>
                </div>
                {{--<div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>--}}
            </div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 text-center">
            <div class="bg-success mr-md-3 pt-3 px-3 pt-md-5 px-md-5 welcome-paket overflow-hidden shadow-sm">
                <div class="my-3 py-3">
                    <a href="{{ url('/paket-wisata-karimunjawa/karimunjawa-3-hari-2-malam-express-bahari-semarang') }}" class="text-white" style="text-decoration: none">
                        <h1 class="display-5">3H2M via Express Semarang <sup><span class="badge badge-light">Terbaru</span></sup><span class="sr-only">Karimunjawa 3 Hari 2 Malam Express Bahari Semarang</span></h1>
                        <p class="lead">Mulai dari Rp. 1.100.000,- ++</p>
                        <hr class="shadow-sm">
                    </a>
                </div>
                {{--<div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>--}}
            </div>
            <div class="bg-white mr-md-3 pt-3 px-3 pt-md-5 px-md-5 welcome-paket overflow-hidden shadow-sm">
                <div class="my-3 p-3">
                    <a href="{{ url('/paket-wisata-karimunjawa/karimunjawa-3-hari-2-malam-kmc-kartini-semarang') }}" style="text-decoration: none">
                        <h1 class="display-5">3H2M via KMC Kartini Semarang <span class="sr-only">Karimunjawa 3 Hari 2 Malam KMC Kartini Semarang</span></h1>
                        <p class="lead">Mulai dari Rp. 910.000,- ++</p>
                        <hr class="shadow-sm">
                    </a>
                </div>
                {{--<div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>--}}
            </div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 text-center">
            <div class="bg-white mr-md-3 pt-3 px-3 pt-md-5 px-md-5 welcome-paket overflow-hidden shadow-sm">
                <div class="my-3 py-3">
                    <a href="{{ url('/paket-wisata-karimunjawa/karimunjawa-3-hari-2-malam-ferry') }}" style="text-decoration: none">
                        <h1 class="display-5">3H2M via Ferry Jepara <span class="sr-only">Karimunjawa 3 Hari 2 Malam Ferry</span></h1>
                        <p class="lead">Mulai dari Rp. 750.000,- ++</p>
                        <hr class="shadow-sm">
                    </a>
                </div>
                {{--<div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>--}}
            </div>
            <div class="bg-white mr-md-3 pt-3 px-3 pt-md-5 px-md-5 welcome-paket overflow-hidden shadow-sm">
                <div class="my-3 p-3">
                    <a href="{{ url('/paket-wisata-karimunjawa/karimunjawa-4-hari-3-malam-ferry') }}" style="text-decoration: none">
                        <h1 class="display-5">4H3M via Ferry Jepara <span class="sr-only">Karimunjawa 4 Hari 3 Malam Ferry</span></h1>
                        <p class="lead">Mulai dari Rp. 875.000,- ++</p>
                        <hr class="shadow-sm">
                    </a>
                </div>
                {{--<div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>--}}
            </div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 text-center">
            <div class="bg-white mr-md-3 pt-3 px-3 pt-md-5 px-md-5 welcome-paket overflow-hidden shadow-sm">
                <div class="my-3 py-3">
                    <a href="{{ url('/paket-wisata-karimunjawa/karimunjawa-4-hari-3-malam-express-bahari-jepara') }}" style="text-decoration: none">
                        <h1 class="display-5">4H3M via Express Jepara <span class="sr-only">Karimunjawa 4 Hari 3 Malam Express Bahari Jepara</span></h1>
                        <p class="lead">Mulai dari Rp. 1.035.000,- ++</p>
                        <hr class="shadow-sm">
                    </a>
                </div>
                {{--<div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>--}}
            </div>
            <div class="bg-white mr-md-3 pt-3 px-3 pt-md-5 px-md-5 welcome-paket overflow-hidden shadow-sm">
                <div class="my-3 p-3">
                    <a href="#jadwalOpenTripHarmoniKarimunjawa" style="text-decoration: none">
                        <h1 class="display-5">Open Trip <span class="sr-only">Open Trip Harmoni Karimunjawa</span></h1>
                        <p class="lead">Mulai dari Rp. 600.000,- ++</p>
                        <hr class="shadow-sm">
                    </a>
                </div>
                {{--<div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>--}}
            </div>
        </div>

        <div class="container-fluid py-5 text-center" id="jadwalOpenTripHarmoniKarimunjawa">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="title m-b-md text-center">
                        Jadwal Open Trip {{ date('Y') }}
                        <span class="sr-only">Jadwal Open Trip Harmoni Karimunjawa {{ date('Y') }}</span>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-borderless table-hover font-weight-bold">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Trip</th>
                                <th>Kuota</th>
                                <th>Tanggal Trip</th>
                                <th>Detail</th>
                            </tr>
                            </thead>
                            @inject('opentrip','harmoniKarimunJawa\OpenTripSchedule')
                            <tbody>
                            @foreach($opentrip->all() as $item)
                                @if(!($item->count() > 1))
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama_trip }}</td>
                                        <td>{{ $item->kuota_trip }} orang</td>
                                        <td>{{ $item->tanggal_trip }}</td>
                                        <td>
                                            <a class="btn btn-primary" href="{{ url('/paket-wisata-karimunjawa/open-trip-harmoni-karimunjawa') }}" role="button">Klik disini</a>
                                        </td>
                                    </tr>
                                @else
                                    <tr>
                                        <td colspan="5">Tidak ada jadwal Open Trip tersedia.</td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection