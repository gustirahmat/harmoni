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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="title m-b-md text-center">
                            Harga Paket Trip Karimunjawa
                        </div>
                        <p class="lead font-weight-bold text-center text-uppercase">Meeting Point di Bandara Karimunjawa</p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="font-weight-bold bg-primary text-white text-center text-uppercase">
                                <tr>
                                    <th rowspan="2" class="align-middle">Jenis Penginapan</th>
                                    <th rowspan="2" class="align-middle">Nama Penginapan</th>
                                    <th colspan="3">Harga (/pax)</th>
                                </tr>
                                <tr>
                                    <th>2H1M</th>
                                    <th>3H2M</th>
                                    <th>4H3M</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td rowspan="3">Homestay</td>
                                    <td>Fan Kamar Mandi Luar</td>
                                    <td>Rp {{ number_format(760000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(910000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1035000 + 100000, 0) }}</td>
                                </tr>
                                <tr>
                                    <td>Fan Kamar Mandi Dalam</td>
                                    <td>Rp {{ number_format(785000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(960000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1110000 + 100000, 0) }}</td>
                                </tr>
                                <tr>
                                    <td>AC Kamar Mandi Dalam</td>
                                    <td>Rp {{ number_format(910000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1160000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1360000 + 100000, 0) }}</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td rowspan="8">Hotel Bintang 3</td>
                                    <td>d'SEASON - Superior</td>
                                    <td>Rp {{ number_format(1260000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1710000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1910000 + 100000, 0) }}</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>d'SEASON - Bisnis</td>
                                    <td>Rp {{ number_format(1310000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1810000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(2110000 + 100000, 0) }}</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>d'SEASON - Executive</td>
                                    <td>Rp {{ number_format(1360000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1910000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(2210000 + 100000, 0) }}</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>Happinezz Hills <sup class="badge badge-success">Baru</sup></td>
                                    <td>Rp {{ number_format(1360000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1910000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(2210000 + 100000, 0) }}</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>Java Paradise Resort - Standard</td>
                                    <td>Rp {{ number_format(1460000 - 90000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(2060000 - 180000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(2460000 - 270000 + 100000, 0) }}</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>Java Paradise Resort - Superior</td>
                                    <td>Rp {{ number_format(1460000 - 45000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(2060000 - 90000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(2460000 - 135000 + 100000, 0) }}</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>Java Paradise Resort - Deluxe</td>
                                    <td>Rp {{ number_format(1460000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(2060000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(2460000 + 100000, 0) }}</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>Java Paradise Resort - Executive</td>
                                    <td>Rp {{ number_format(1510000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(2210000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(2760000 + 100000, 0) }}</td>
                                </tr>
                                <tr>
                                    <td rowspan="9">Hotel Standard / Melati</td>
                                    <td>PURI Karimun</td>
                                    <td>Rp {{ number_format(1110000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1460000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1660000 + 100000, 0) }}</td>
                                </tr>
                                <tr>
                                    <td>NEW OCEAN - Standard</td>
                                    <td>Rp {{ number_format(1110000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1460000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1660000 + 100000, 0) }}</td>
                                </tr>
                                <tr>
                                    <td>NEW OCEAN - Suite</td>
                                    <td>Rp {{ number_format(1160000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1510000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1760000 + 100000, 0) }}</td>
                                </tr>
                                <tr>
                                    <td>THE KELAPA - Standard</td>
                                    <td>Rp {{ number_format(1110000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1460000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1660000 + 100000, 0) }}</td>
                                </tr>
                                <tr>
                                    <td>THE KELAPA - Suite</td>
                                    <td>Rp {{ number_format(1260000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1760000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(2160000 + 100000, 0) }}</td>
                                </tr>
                                <tr>
                                    <td>MANGROVE INN</td>
                                    <td>Rp {{ number_format(1110000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1460000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1660000 + 100000, 0) }}</td>
                                </tr>
                                <tr>
                                    <td>ESCAPE - Standard</td>
                                    <td>Rp {{ number_format(1110000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1410000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1660000 + 100000, 0) }}</td>
                                </tr>
                                <tr>
                                    <td>ESCAPE - Deluxe</td>
                                    <td>Rp {{ number_format(1160000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1460000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1760000 + 100000, 0) }}</td>
                                </tr>
                                <tr>
                                    <td>ESCAPE - Suite</td>
                                    <td>Rp {{ number_format(1210000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1510000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1860000 + 100000, 0) }}</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td rowspan="12">Cottage / Villa</td>
                                    <td>ASRI - Apung (Fan)</td>
                                    <td>Rp {{ number_format(1010000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1360000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1560000 + 100000, 0) }}</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>ASRI - Cottage (AC)</td>
                                    <td>Rp {{ number_format(1060000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1460000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1660000 + 100000, 0) }}</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>LUMBUNG</td>
                                    <td>Rp {{ number_format(1160000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1510000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1760000 + 100000, 0) }}</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>ALCHY - Cendana</td>
                                    <td>Rp {{ number_format(1210000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1610000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1910000 + 100000, 0) }}</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>ALCHY - Waru</td>
                                    <td>Rp {{ number_format(1360000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1810000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(2160000 + 100000, 0) }}</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>SUNRISE - Standard</td>
                                    <td>Rp {{ number_format(1110000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1460000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1610000 + 100000, 0) }}</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>SUNRISE - Suite</td>
                                    <td>Rp {{ number_format(1160000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1560000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1760000 + 100000, 0) }}</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>SUNRISE - Executive</td>
                                    <td>Rp {{ number_format(1210000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1610000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1860000 + 100000, 0) }}</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>SUNRISE - Master</td>
                                    <td>Rp {{ number_format(1260000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1710000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(2060000 + 100000, 0) }}</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>WISMA APUNG - Fan</td>
                                    <td>Rp {{ number_format(1110000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1410000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1610000 + 100000, 0) }}</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>WISMA APUNG - AC</td>
                                    <td>Rp {{ number_format(1160000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1560000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1760000 + 100000, 0) }}</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>MIRABELLE JOGLO</td>
                                    <td>Rp {{ number_format(1160000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1510000 + 100000, 0) }}</td>
                                    <td>Rp {{ number_format(1760000 + 100000, 0) }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="font-weight-bold font-italic text-danger">
                            <p class="text-uppercase" style="font-size: x-large;">Catatan:</p>
                            <ul>
                                <li>Pendaftaran minimal untuk 2 orang</li>
                                <li>Peserta <u>Warga Negara Asing (WNA)</u> dikenakan biaya tambahan sebesar Rp {{ number_format(150000, 0) }} </li>
                                <li>Harga yang tertera untuk 1 orang</li>
                                <li>Anak usia 5 tahun ke atas bayar full</li>
                                <li>Anak usia di bawah 5 tahun dikenakan biaya administrasi sebesar Rp {{ number_format(200000, 0) }} (Tanpa mendapatkan fasilitas)</li>
                                <li>Harga dapat berubah saat musim liburan / peak season</li>
                                <li>Pendaftaran untuk 11 peserta ke atas bisa dilayani private trip</li>
                                <li>Permintaan private trip untuk reservasi dengan jumlah peserta kurang dari 10 orang akan dikenakan biaya tambahan sebesar (Rp {{ number_format(1500000, 0) }} per grup rombongan untuk paket trip 2H1M atau 3H2M, dan Rp {{ number_format(2500000, 0) }} untuk paket trip 4H3M dan akan mendapatkan full dokumentasi beserta video klip pendek)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="shadow-sm">
                <div class="card">
                    <div class="card-body">
                        <div class="title m-b-md text-center">
                            Fasilitas Trip Karimunjawa
                        </div>
                        <div class="row">
                            <div class="col-12 col-md">
                                <h4>Include:</h4>
                                <ul>
                                    <li>Transport check-in & check-out</li>
                                    <li>Penginapan (isi 2 - 3 orang)</li>
                                    <li>Makan 3x / 6x / 8x</li>
                                    <li>Tranport wisata</li>
                                    <li>Guide Lokal</li>
                                    <li>Alat snorkeling + life jacket</li>
                                    <li>Dokumentasi Wisata Laut dan Wisata Darat</li>
                                    <li>Dokumentasi Aerial/Drone (kondisional)</li>
                                    <li>Biaya sandar perahu</li>
                                    <li>Air mineral</li>
                                    <li>Asuransi Penyeberangan</li>
                                    <li>Perlengkapan P3K</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md">
                                <h4>Exclude:</h4>
                                <ul>
                                    <li>Tiket Pesawat Semarang - Karimunjawa PP</li>
                                    <li>HTM Menjangan Resort (Rp {{ number_format(20000, 0) }})</li>
                                    <li>HTM Penangkaran Penyu (Rp {{ number_format(5000, 0) }})</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="shadow-sm">
                <div class="card">
                    <div class="card-body">
                        <div class="title m-b-md text-center">
                            Itinerary Trip Karimunjawa
                        </div>
                        <p class="lead font-weight-bold text-center text-uppercase">Meeting Point di Bandara Karimunjawa</p>
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link nav-itin active" id="nav-2h1m-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">2H1M</a>
                                <a class="nav-item nav-link nav-itin" id="nav-3h2m-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">3H2M</a>
                                <a class="nav-item nav-link nav-itin" id="nav-4h3m-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">4H3M</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-2h1m-tab">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <caption>Itinerary Trip 2H1M</caption>
                                        <thead class="font-weight-bold bg-primary text-white text-center text-uppercase">
                                        <tr>
                                            <th>Hari</th>
                                            <th>Waktu</th>
                                            <th>Aktivitas</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td rowspan="13">Pertama</td>
                                            <td rowspan="6">12:00 - 13:30</td>
                                            <td>Penjemputan di Bandara Karimunjawa menggunakan mobil/motor</td>
                                        </tr>
                                        <tr>
                                            <td>Menuju penginapan</td>
                                        </tr>
                                        <tr>
                                            <td>Check-in penginapan</td>
                                        </tr>
                                        <tr>
                                            <td>Makan siang (disediakan)</td>
                                        </tr>
                                        <tr>
                                            <td>Istirahat dan persiapan Wisata Laut</td>
                                        </tr>
                                        <tr>
                                            <td>Menuju Pelabuhan Wisata</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="4">13:30 - 18:00</td>
                                            <td class="bg-primary text-white">
                                                Wisata laut menggunakan perahu menuju
                                                <div class="bounce float-right">
                                                    <b style="font-size: larger">&downarrow;&downarrow;</b>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Snorkeling di spot Maer</td>
                                        </tr>
                                        <tr>
                                            <td>Pantai Tanjung Gelam</td>
                                        </tr>
                                        <tr>
                                            <td>Kembali ke penginapan</td>
                                        </tr>
                                        <tr>
                                            <td>18:00 - 19:00</td>
                                            <td>Ishoma</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">19:00 - selesai</td>
                                            <td>Makan malam (disediakan)</td>
                                        </tr>
                                        <tr>
                                            <td>Acara bebas</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="bg-primary"></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="9">Kedua</td>
                                            <td rowspan="3">08:00 - 09:00</td>
                                            <td>Packing</td>
                                        </tr>
                                        <tr>
                                            <td>Sarapan (disediakan)</td>
                                        </tr>
                                        <tr>
                                            <td>Check-out penginapan</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">09:00 - 11:00</td>
                                            <td>Wisata Darat ke Bukit Love</td>
                                        </tr>
                                        <tr>
                                            <td>Diantar kembali ke Bandara Karimunjawa</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-3h2m-tab">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <caption>Itinerary Trip 3H2M</caption>
                                        <thead class="font-weight-bold bg-primary text-white text-center text-uppercase">
                                        <tr>
                                            <th>Hari</th>
                                            <th>Waktu</th>
                                            <th>Aktivitas</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td rowspan="9">Pertama</td>
                                        <tr>
                                            <td rowspan="3">12:00 - 18:00</td>
                                            <td>Penjemputan di Bandara Karimunjawa menggunakan mobil/motor</td>
                                        </tr>
                                        <tr>
                                            <td>Makan siang di Pantai Anora (disediakan)</td>
                                        </tr>
                                        <tr>
                                            <td>Pantai Tanjung Gelam</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="3">18:00 - 19:00</td>
                                            <td>Menuju penginapan</td>
                                        </tr>
                                        <tr>
                                            <td>Check-in penginapan</td>
                                        </tr>
                                        <tr>
                                            <td>Ishoma</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">19:00 - selesai</td>
                                            <td>Makan malam (disediakan)</td>
                                        </tr>
                                        <tr>
                                            <td>Acara bebas</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="bg-primary"></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="12">Kedua</td>
                                            <td rowspan="3">07:30 - 08:30</td>
                                            <td>Sarapan (disediakan)</td>
                                        </tr>
                                        <tr>
                                            <td>Persiapan Wisata Laut</td>
                                        </tr>
                                        <tr>
                                            <td>Menuju Pelabuhan Wisata</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="6">08:30 - 18:00</td>
                                            <td class="bg-primary text-white">
                                                Wisata laut menggunakan perahu menuju
                                                <div class="bounce float-right">
                                                    <b style="font-size: larger">&downarrow;&downarrow;</b>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Snorkeling pertama di spot Maer</td>
                                        </tr>
                                        <tr>
                                            <td>BBQ / Makang Siang (disediakan) di Pulau Geleyang</td>
                                        </tr>
                                        <tr>
                                            <td>Snorkeling kedua di spot Gosong Cemara</td>
                                        </tr>
                                        <tr>
                                            <td>Pulau Cemara Kecil</td>
                                        </tr>
                                        <tr>
                                            <td>Kembali ke penginapan</td>
                                        </tr>
                                        <tr>
                                            <td>18:00 - 19:00</td>
                                            <td>Ishoma</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">19:00 - selesai</td>
                                            <td>Makan malam (disediakan)</td>
                                        </tr>
                                        <tr>
                                            <td>Acara bebas</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="bg-primary"></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="9">Ketiga</td>
                                            <td rowspan="3">08:00 - 09:00</td>
                                            <td>Packing</td>
                                        </tr>
                                        <tr>
                                            <td>Sarapan (disediakan)</td>
                                        </tr>
                                        <tr>
                                            <td>Check-out penginapan</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">09:00 - 11:00</td>
                                            <td>Wisata Darat ke Bukit Love</td>
                                        </tr>
                                        <tr>
                                            <td>Diantar kembali ke Bandara Karimunjawa</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-4h3m-tab">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <caption>Itinerary Trip 4H3M</caption>
                                        <thead class="font-weight-bold bg-primary text-white text-center text-uppercase">
                                        <tr>
                                            <th>Hari</th>
                                            <th>Waktu</th>
                                            <th>Aktivitas</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td rowspan="9">Pertama</td>
                                        <tr>
                                            <td rowspan="3">12:00 - 18:00</td>
                                            <td>Penjemputan di Bandara Karimunjawa menggunakan mobil/motor</td>
                                        </tr>
                                        <tr>
                                            <td>Makan siang di Pantai Anora (disediakan)</td>
                                        </tr>
                                        <tr>
                                            <td>Pantai Tanjung Gelam</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="3">18:00 - 19:00</td>
                                            <td>Menuju penginapan</td>
                                        </tr>
                                        <tr>
                                            <td>Check-in penginapan</td>
                                        </tr>
                                        <tr>
                                            <td>Ishoma</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">19:00 - selesai</td>
                                            <td>Makan malam (disediakan)</td>
                                        </tr>
                                        <tr>
                                            <td>Acara bebas</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="bg-primary"></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="12">Kedua</td>
                                            <td rowspan="3">07:00 - 08:30</td>
                                            <td>Sarapan (disediakan)</td>
                                        </tr>
                                        <tr>
                                            <td>Persiapan Wisata Laut</td>
                                        </tr>
                                        <tr>
                                            <td>Menuju Pelabuhan Wisata</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="6">08:30 - 18:00</td>
                                            <td class="bg-primary text-white">
                                                Wisata laut menggunakan perahu menuju
                                                <div class="bounce float-right">
                                                    <b style="font-size: larger">&downarrow;&downarrow;</b>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Snorkeling pertama di spot Maer</td>
                                        </tr>
                                        <tr>
                                            <td>BBQ / Makang Siang (disediakan) di Pulau Geleyang</td>
                                        </tr>
                                        <tr>
                                            <td>Snorkeling kedua di spot Gosong Cemara</td>
                                        </tr>
                                        <tr>
                                            <td>Pulau Cemara Kecil</td>
                                        </tr>
                                        <tr>
                                            <td>Kembali ke penginapan</td>
                                        </tr>
                                        <tr>
                                            <td>18:00 - 19:00</td>
                                            <td>Ishoma</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">19:00 - selesai</td>
                                            <td>Makan malam (disediakan)</td>
                                        </tr>
                                        <tr>
                                            <td>Acara bebas</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="bg-primary"></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="12">Ketiga</td>
                                            <td rowspan="3">07:00 - 08:30</td>
                                            <td>Sarapan (disediakan)</td>
                                        </tr>
                                        <tr>
                                            <td>Persiapan Wisata Laut</td>
                                        </tr>
                                        <tr>
                                            <td>Menuju Pelabuhan Wisata</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="6">08:30 - 18:00</td>
                                            <td class="bg-primary text-white">
                                                Wisata laut menggunakan perahu menuju
                                                <div class="bounce float-right">
                                                    <b style="font-size: larger">&downarrow;&downarrow;</b>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Snorkeling ketiga di spot Pulau Cilik</td>
                                        </tr>
                                        <tr>
                                            <td>BBQ / Makang Siang (disediakan) di Pulau Cilik</td>
                                        </tr>
                                        <tr>
                                            <td>Snorkeling keempat di spot Anora</td>
                                        </tr>
                                        <tr>
                                            <td>Pantai Anora atau Penangkaran Penyu (opsional)</td>
                                        </tr>
                                        <tr>
                                            <td>Kembali ke penginapan</td>
                                        </tr>
                                        <tr>
                                            <td>18:00 - 19:00</td>
                                            <td>Ishoma</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">19:00 - selesai</td>
                                            <td>Makan malam (tidak disediakan)</td>
                                        </tr>
                                        <tr>
                                            <td>Acara bebas</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="bg-primary"></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="9">Keempat</td>
                                            <td rowspan="3">08:00 - 09:00</td>
                                            <td>Packing</td>
                                        </tr>
                                        <tr>
                                            <td>Sarapan (disediakan)</td>
                                        </tr>
                                        <tr>
                                            <td>Check-out penginapan</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">09:00 - 11:00</td>
                                            <td>Wisata Darat ke Bukit Love</td>
                                        </tr>
                                        <tr>
                                            <td>Diantar kembali ke Bandara Karimunjawa</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="font-weight-bold font-italic">
                            <p class="text-uppercase" style="font-size: x-large;">Catatan:</p>
                            <ul>
                                <li>Destinasi dan waktu tidak mengikat atau bisa berubah menyesuaikan kondisi di lapangan</li>
                                <li>Kegiatan yang tidak tertera di itinerary di luar tanggung jawab kami</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="shadow-sm">
                <div class="card">
                    <div class="card-body">
                        <h4>Tulis Komentar:</h4>
                        <div class="fb-comments" data-href="{{ route('by-plane-trip') }}" data-width="100%" data-numposts="10"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection