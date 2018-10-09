@extends('layouts.web')

@section('content')
    <div class="container py-5 my-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-light">
                        <p class="text-monospace" style="font-size: x-large">Syarat & Ketentuan Trip Harmoni Karimunjawa {{ date('Y') }}</p>
                    </div>
                    <div class="card-body text-dark text-justify text-monospace">
                        <p>
                            Seiring dengan semakin banyaknya peserta trip Harmoni, kami merasa perlu untuk membuat peraturan tertulis bagi seluruh calon peserta dan peserta trip Harmoni
                            guna memberikan rasa aman dan nyaman selama menjadi pelanggan Harmoni. Untuk itu diputuskanlah untuk membuat Syarat & Ketentuan dengan poin-poin sebagai berikut:
                        </p>
                        <ol>
                            <li>Reservasi trip dianggap sah dan baru akan di proses jika sdh transfer DP minimal 50% dari harga paket yg di pilih</li>
                            <li>Peserta yg sudah transfer DP di anggap menyetujui rule/aturan yg kami buat</li>
                            <li>Pembatalan trip dari peserta maka DP tidak dapat diminta kembali dengan argumentasi apapun</li>
                            <li>Pembatalan trip karena kapal tdk dapat menyeberang/cuaca buruk maka DP akan di kembalikan full paling lambat 5 hari sejak jadwal trip</li>
                            <li>Jika kapal penyeberangan yg di pilih peserta tdk dapat menyeberang karena alasan teknis maka akan dialihkan ke kapal lain yg tersedia dan akan di kalkulasi ulang jika ada selisih harga tiket</li>
                            <li>Jika kapal tidak dapat menyeberang saat kepulangan dari karimunjawa maka semua biaya pengeluaran tambahan di luar tanggung jawab kami karena trip sudah berjalan dan semua fasilitas yg kami janjikan sudah kami berikan</li>
                            <li>Pihak harmoni hanya bisa memediasi dan tidak bertanggung jawab atas pelayanan internal dari kapal penyeberangan dan penginapan yg di pilih peserta</li>
                        </ol>
                        <p>Dengan membaca halaman ini, seluruh calon peserta dan peserta trip dianggap telah menyetujui Syarat dan Ketentuan yang telah ditetapkan oleh pihak Harmoni dan bersedia mengikuti semua poin diatas.</p>
                        <br>
                        <br>
                        <div class="text-center">
                            <p>Kepulauan Karimunjawa, 1 Januari 2018</p>
                            <img src="{{ asset('img/logo.png') }}" alt="Harmoni Karimunjawa">
                            <br>
                            <br>
                            <p>Tim Harmoni Karimunjawa</p>
                        </div>
                    </div>
                </div>
                <hr class="shadow-sm">
                <div class="card">
                    <div class="card-body">
                        <h4>Bagikan Halaman:</h4>
                        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                        <div class="elfsight-app-7c14c740-47e6-4813-86df-c8e357b82c25"></div>
                        <hr>
                        <h4>Tulis Komentar:</h4>
                        <div class="fb-comments" data-href="https://harmonikarimunjawa.com/public/paket-wisata-karimunjawa/open-trip-harmoni-karimunjawa" data-width="100%" data-numposts="10"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection