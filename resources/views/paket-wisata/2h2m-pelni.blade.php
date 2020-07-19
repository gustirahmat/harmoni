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
                            Harga Paket 2H1M via Pelni Semarang
                        </div>
                        <p class="lead font-weight-bold text-center">KEBERANGKATAN JUMAT - MINGGU</p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="font-weight-bold bg-primary text-white text-center text-uppercase">
                                <tr>
                                    <th>Jenis Penginapan</th>
                                    <th>Nama Penginapan</th>
                                    <th>Harga (/pax)</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td rowspan="3">Homestay</td>
                                    <td>Fan Kamar Mandi Luar</td>
                                    <td>Rp 700.000</td>
                                </tr>
                                <tr>
                                    <td>Fan Kamar Mandi Dalam</td>
                                    <td>Rp 750.000</td>
                                </tr>
                                <tr>
                                    <td>AC Kamar Mandi Dalam</td>
                                    <td>Rp 800.000</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td rowspan="7">Hotel Bintang 3</td>
                                    <td>d'SEASON - Superior</td>
                                    <td>Rp 1.150.000</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>d'SEASON - Bisnis</td>
                                    <td>Rp 1.200.000</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>d'SEASON - Executive</td>
                                    <td>Rp 1.250.000</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>Java Paradise Resort - Standard</td>
                                    <td>Rp {{ number_format(1350000 - 90000, 0) }}</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>Java Paradise Resort - Superior</td>
                                    <td>Rp {{ number_format(1350000 - 45000, 0) }}</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>Java Paradise Resort - Deluxe</td>
                                    <td>Rp 1.350.000</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>Java Paradise Resort - Executive</td>
                                    <td>Rp 1.400.000</td>
                                </tr>
                                <tr>
                                    <td rowspan="9">Hotel Standard / Melati</td>
                                    <td>PURI Karimun</td>
                                    <td>Rp 1.000.000</td>
                                </tr>
                                <tr>
                                    <td>NEW OCEAN - Standard</td>
                                    <td>Rp 1.000.000</td>
                                </tr>
                                <tr>
                                    <td>NEW OCEAN - Suite</td>
                                    <td>Rp 1.050.000</td>
                                </tr>
                                <tr>
                                    <td>THE KELAPA - Standard</td>
                                    <td>Rp 1.000.000</td>
                                </tr>
                                <tr>
                                    <td>THE KELAPA - Suite</td>
                                    <td>Rp 1.150.000</td>
                                </tr>
                                <tr>
                                    <td>MANGROVE INN</td>
                                    <td>Rp 1.000.000</td>
                                </tr>
                                <tr>
                                    <td>ESCAPE - Standard</td>
                                    <td>Rp 1.000.000</td>
                                </tr>
                                <tr>
                                    <td>ESCAPE - Deluxe</td>
                                    <td>Rp 1.050.000</td>
                                </tr>
                                <tr>
                                    <td>ESCAPE - Suite</td>
                                    <td>Rp 1.100.000</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td rowspan="12">Cottage / Villa</td>
                                    <td>ASRI - Apung (Fan)</td>
                                    <td>Rp 900.000</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>ASRI - Cottage (AC)</td>
                                    <td>Rp 950.000</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>LUMBUNG</td>
                                    <td>Rp 1.050.000</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>ALCHY - Cendana</td>
                                    <td>Rp 1.100.000</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>ALCHY - Waru</td>
                                    <td>Rp 1.250.000</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>SUNRISE - Standard</td>
                                    <td>Rp 1.000.000</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>SUNRISE - Suite</td>
                                    <td>Rp 1.050.000</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>SUNRISE - Executive</td>
                                    <td>Rp 1.100.000</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>SUNRISE - Master</td>
                                    <td>Rp 1.150.000</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>WISMA APUNG - Fan</td>
                                    <td>Rp 1.000.000</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>WISMA APUNG - AC</td>
                                    <td>Rp 1.050.000</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>MIRABELLE JOGLO</td>
                                    <td>Rp 1.050.000</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="font-weight-bold font-italic text-danger">
                            <p class="text-uppercase" style="font-size: x-large;">Catatan:</p>
                            <ul>
                                <li>Harga yang tertera untuk 1 orang</li>
                                <li>Peserta <u>Warga Negara Asing (WNA)</u> dikenakan biaya tambahan sebesar Rp {{ number_format(150000, 0) }} </li>
                                <li>Pendaftaran peserta minimal untuk 2 orang</li>
                                <li>Pendaftaran untuk 11 peserta ke atas bisa dilayani private trip</li>
                                <li>Anak usia 5 tahun ke atas bayar full</li>
                                <li>Anak usia di bawah 5 tahun dikenakan biaya administrasi sebesar Rp 200,000 (Tanpa mendapatkan fasilitas)</li>
                                <li>Harga dapat berubah saat musim liburan / peak season</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="shadow-sm">
                <div class="card">
                    <div class="card-body">
                        <div class="title m-b-md text-center">
                            Fasilitas 2H1M via Pelni Semarang
                        </div>
                        <div class="row">
                            <div class="col-12 col-md">
                                <h4>Include:</h4>
                                <ul>
                                    <li>Tiket Kapal Pelni Semarang PP (Economy Class)</li>
                                    <li>Transport check-in & check-out</li>
                                    <li>Penginapan (isi 2 - 3 orang)</li>
                                    <li>Makan 3x (termasuk BBQ 1x)</li>
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
                            Itinerary 2H1M via Pelni Semarang
                        </div>
                        <p class="lead font-weight-bold text-center text-uppercase">Meeting Point di Pelabuhan</p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="font-weight-bold bg-primary text-white text-center text-uppercase">
                                <tr>
                                    <th>Hari</th>
                                    <th>Waktu</th>
                                    <th>Aktivitas</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td rowspan="17">Pertama</td>
                                    <td rowspan="3">22:30 - 23:59</td>
                                    <td>Pembagian tiket kapal</td>
                                </tr>
                                <tr>
                                    <td>Boarding tiket</td>
                                </tr>
                                <tr>
                                    <td>Masuk kapal</td>
                                </tr>
                                <tr>
                                    <td>00:00 - 06:00</td>
                                    <td>Penyeberangan menuju Karimunjawa</td>
                                </tr>
                                <tr>
                                    <td rowspan="5">06:00 - 08:30</td>
                                    <td>Sarapan (disediakan oleh Pelni)</td>
                                </tr>
                                <tr>
                                    <td>Diangkut menggunakan perahu wisata menuju pelabuhan</td>
                                </tr>
                                <tr>
                                    <td>Penjemputan menggunakan mobil/motor</td>
                                </tr>
                                <tr>
                                    <td>Check-in penginapan dan persiapan Wisata Laut</td>
                                </tr>
                                <tr>
                                    <td>Menuju Pelabuhan Wisata </td>
                                </tr>
                                <tr>
                                    <td rowspan="6">08:30 - 18:00</td>
                                    <td class="bg-primary text-white font-italic">
                                        Wisata Laut menggunakan perahu menuju
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
                                    <td rowspan="13">Kedua</td>
                                    <td rowspan="12">07:30 - 13:00</td>
                                    <td>Packing</td>
                                </tr>
                                <tr>
                                    <td>Sarapan (disediakan)</td>
                                </tr>
                                <tr>
                                    <td>Check-out penginapan</td>
                                </tr>
                                <tr>
                                    <td class="bg-primary text-white font-italic">
                                        Wisata Darat menggunakan mobil/motor menuju
                                        <div class="bounce float-right">
                                            <b style="font-size: larger">&downarrow;&downarrow;</b>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pantai Tanjung Gelam</td>
                                </tr>
                                <tr>
                                    <td>Bukit Love</td>
                                </tr>
                                <tr>
                                    <td>Menuju Pelabuhan</td>
                                </tr>
                                <tr>
                                    <td>Pembagian tiket kapal</td>
                                </tr>
                                <tr>
                                    <td>Diantar menggunakan perahu wisata menuju Kapal Pelni</td>
                                </tr>
                                <tr>
                                    <td>Boarding tiket</td>
                                </tr>
                                <tr>
                                    <td>Masuk kapal</td>
                                </tr>
                                <tr>
                                    <td>Makan siang (disediakan oleh Pelni)</td>
                                </tr>
                                <tr>
                                    <td>13:00 - 19:00</td>
                                    <td>Penyeberangan menuju Semarang</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="font-weight-bold font-italic text-danger">
                            <p class="text-uppercase" style="font-size: x-large;">Catatan:</p>
                            <ul>
                                <li>Peserta diharuskan tiba di pelabuhan 90 menit sebelum kapal berangakat</li>
                                <li>Destinasi dan waktu tidak mengikat atau bisa berubah menyesuaikan kondisi di lapangan</li>
                                <li>Peserta diharapkan untuk melakukan konfirmasi jadwal kapal H-1 trip karena dapat berubah sewaktu-waktu</li>
                                <li>Kegiatan yang tidak tertera di itinerary di luar tanggung jawab kami</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="shadow-sm">
                <div class="card">
                    <div class="card-body">
                        <h4>Tulis Komentar:</h4>
                        <div class="fb-comments" data-href="{{ route('2h2m-pelni') }}" data-width="100%" data-numposts="10"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection