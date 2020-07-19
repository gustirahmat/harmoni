@extends('layouts.web')

@section('content')
    <div class="container py-5 my-5">
        <div class="row justify-content-center">
            <div class="col-md-12 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-text">
                            <div class="text-center">
                                <div class="title m-b-md text-danger">
                                    Karimunjawa Masih Ditutup
                                </div>
                                Dalam keadaan pandemi Covid-19, saat ini seluruh kegiatan wisata di <b>Taman Nasional Kepulauan Karimunjawa</b> juga dihentikan sampai batas waktu yang belum dapat ditentukan. Terkait harga paket yang saat ini tertera merupakan harga yang berlaku saat sebelum pandemi ditetapkan.
                                Ketika nanti kegiatan wisata di <b>Taman Nasional Kepulauan Karimunjawa</b> diizinkan untuk dibuka kembali, besar kemungkinan harga paket wisata kami mengalami perubahan guna menyesuaikan kondisi yang akan diterapkan di lapangan.
                                <br>
                                Demikian informasi yang dapat kami sampaikan. Terima kasih dan harap maklum.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="float-right">
                            <img src="{{ asset('img/logo.png') }}" alt="Logo Harmoni Karimunjawa">
                        </div>
                        <h1>Tentang Kami <span class="sr-only">Harmoni Karimunjawa</span></h1>
                        <p>
                            <b style="font-size: larger">Kenapa memilih kami?</b>
                            <br>
                            Karena Harmoni Karimunjawa adalah paguyuban warga lokal Kepulauan Karimunjawa yang berusaha menata dan memperkenalkan Karimunjawa agar lebih dikenal dunia, dalam melayani wisatawan lokal maupun wisatawan mancanegara.
                            <br>
                            Kami mengutamakan edukasi untuk mengenalkan biota laut beserta habitatnya dan cara menjaga ekosistem agar keindahannya tetap bisa dinikmati sampai anak cucu kita nanti.
                        </p>
                        <div>
                            <video src="{{ asset('video/Harmoni_Karimun.mp4') }}" width="100%" height="320" controls>
                                Video not supported
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="shadow-sm">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1>Lokasi Kantor <span class="sr-only">Harmoni Karimunjawa</span></h1>
                        <iframe title="Lokasi Kantor Harmoni Karimunjawa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3968.8421956453144!2d110.43109821476736!3d-5.877791195741492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e73d15e2ed38a9f%3A0xbc92e3eda476cf31!2sHarmoni+Karimun+Jawa!5e0!3m2!1sen!2sid!4v1533578396752" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <hr class="shadow-sm">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1>Crew Harmoni</h1>
                        <p>Coming Soon!</p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="shadow-sm">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1>Facebook Fanpage</h1>
                        <iframe title="Facebook Fanpage" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fharmoni.karimunjawa%2F&tabs=timeline&width=500&height=600&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=218322302188149" width="100%" height="600" style="border:none; overflow:hidden" scrolling="yes" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <hr class="shadow-sm">
    </div>
@endsection