@extends('layouts.web')

@section('content')
    <div class="container py-5 my-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="title m-b-md text-center">
                            Harga Paket 2H1M via Ferry Siginjai Jepara
                        </div>
                        <p class="lead font-weight-bold text-center">KEBERANGKATAN SENIN - SELASA / RABU - KAMIS / SABTU - MINGGU</p>
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
                                        <td>Rp. 600.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>Fan Kamar Mandi Dalam</td>
                                        <td>Rp. 625.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>AC Kamar Mandi Dalam</td>
                                        <td>Rp. 750.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td rowspan="5">Hotel Bintang 3</td>
                                        <td>DSEASON - Superior</td>
                                        <td>Rp. 1.100.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>DSEASON - Bisnis</td>
                                        <td>Rp. 1.150.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>DSEASON - Executive</td>
                                        <td>Rp. 1.200.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>JAVA P - Deluxe</td>
                                        <td>Rp. 1.300.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>JAVA P - Executive</td>
                                        <td>Rp. 1.350.000,-</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="9">Hotel Standard / Melati</td>
                                        <td>PURI Karimun</td>
                                        <td>Rp. 950.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>NEW OCEAN - Standard</td>
                                        <td>Rp. 950.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>NEW OCEAN - Suite</td>
                                        <td>Rp. 1.000.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>THE KELAPA - Standard</td>
                                        <td>Rp. 950.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>THE KELAPA - Suite</td>
                                        <td>Rp. 1.100.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>MANGROVE INN</td>
                                        <td>Rp. 950.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>ESCAPE - Standard</td>
                                        <td>Rp. 950.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>ESCAPE - Deluxe</td>
                                        <td>Rp. 1.000.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>ESCAPE - Suite</td>
                                        <td>Rp. 1.050.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td rowspan="12">Cottage / Villa</td>
                                        <td>ASRI - Apung (Fan)</td>
                                        <td>Rp. 850.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>ASRI - Cottage (AC)</td>
                                        <td>Rp. 900.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>LUMBUNG</td>
                                        <td>Rp. 1.000.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>ALCHY - Cendana</td>
                                        <td>Rp. 1.050.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>ALCHY - Waru</td>
                                        <td>Rp. 1.200.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>SUNRISE - Standard</td>
                                        <td>Rp. 950.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>SUNRISE - Suite</td>
                                        <td>Rp. 1.000.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>SUNRISE - Executive</td>
                                        <td>Rp. 1.050.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>SUNRISE - Master</td>
                                        <td>Rp. 1.100.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>WISMA APUNG - Fan</td>
                                        <td>Rp. 950.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>WISMA APUNG - AC</td>
                                        <td>Rp. 1.000.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>MIRABELLE JOGLO</td>
                                        <td>Rp. 1.000.000,-</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="font-weight-bold font-italic text-danger">
                            <p class="text-uppercase" style="font-size: x-large;">Catatan:</p>
                            <ul>
                                <li>Harga yang tertera untuk 1 orang</li>
                                <li>Pendaftaran peserta minimal untuk 2 orang</li>
                                <li>Pendaftaran untuk 11 peserta ke atas bisa dilayani private trip</li>
                                <li>Anak usia 5 tahun ke atas bayar full</li>
                                <li>Anak usia di bawah 5 tahun dikenakan biaya administrasi</li>
                                <li>Harga dapat berubah saat musim liburan / peak season</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="shadow-sm">
                <div class="card">
                    <div class="card-body">
                        <div class="title m-b-md text-center">
                            Itinerary 2H1M via Ferry Siginjai Jepara
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
                                    <td rowspan="18">Pertama</td>
                                    <td rowspan="3">05:30 - 06:30</td>
                                    <td>Pembagian tiket kapal</td>
                                </tr>
                                <tr>
                                    <td>Boarding tiket</td>
                                </tr>
                                <tr>
                                    <td>Masuk kapal</td>
                                </tr>
                                <tr>
                                    <td>06:30 - 11:00</td>
                                    <td>Penyeberangan menuju Karimunjawa</td>
                                </tr>
                                <tr>
                                    <td rowspan="4">11:00 - 12:30</td>
                                    <td>Penjemputan menggunakan mobil/motor</td>
                                </tr>
                                <tr>
                                    <td>Check-in penginapan</td>
                                </tr>
                                <tr>
                                    <td>Makan siang (disediakan)</td>
                                </tr>
                                <tr>
                                    <td>Istirahat dan persiapan Wisata Darat</td>
                                </tr>
                                <tr>
                                    <td rowspan="3">12:30 - 13:30</td>
                                    <td class="bg-primary text-white font-italic">
                                        Wisata Darat menggunakan mobil/motor menuju
                                        <div class="bounce float-right">
                                            <b style="font-size: larger">&downarrow;&downarrow;</b>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bukit Love</td>
                                </tr>
                                <tr>
                                    <td>Menuju Pelabuhan Wisata</td>
                                </tr>
                                <tr>
                                    <td rowspan="5">13:30 - 18:00</td>
                                    <td class="bg-primary text-white font-italic">
                                        Wisata laut menggunakan perahu menuju
                                        <div class="bounce float-right">
                                            <b style="font-size: larger">&downarrow;&downarrow;</b>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Penangkaran hiu (opsional)</td>
                                </tr>
                                <tr>
                                    <td>Snorkeling pertama di spot Maer</td>
                                </tr>
                                <tr>
                                    <td>Pantai Tanjung Gelam</td>
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
                                    <td rowspan="8">Kedua</td>
                                    <td rowspan="7">06:00 - 07:00</td>
                                    <td>Packing</td>
                                </tr>
                                <tr>
                                    <td>Check-out penginapan</td>
                                </tr>
                                <tr>
                                    <td>Diantar ke pelabuhan menggunakan mobil/motor</td>
                                </tr>
                                <tr>
                                    <td>Pembagian nasi box (sarapan)</td>
                                </tr>
                                <tr>
                                    <td>Pembagian tiket kapal</td>
                                </tr>
                                <tr>
                                    <td>Boarding tiket</td>
                                </tr>
                                <tr>
                                    <td>Masuk kapal</td>
                                </tr>
                                <tr>
                                    <td>11:00 - 13:00</td>
                                    <td>Penyeberangan menuju Jepara</td>
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
                        <div class="title m-b-md text-center">
                            Fasilitas 2H1M via Ferry Siginjai Jepara
                        </div>
                        <div class="row">
                            <div class="col-12 col-md">
                                <h4>Include:</h4>
                                <ul>
                                    <li>Tiket Kapal Ferry Siginjai Jepara PP (Economy Class)</li>
                                    <li>Transport check-in & check-out</li>
                                    <li>Penginapan (isi 2 - 3 orang)</li>
                                    <li>Makan 3x</li>
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
                                    <li>HTM Kolam Hiu (Rp. 40.000,-)</li>
                                    <li>HTM Menjangan Resort (Rp. 20.000,-)</li>
                                    <li>HTM Penangkaran Penyu (Rp. 5.000,-)</li>
                                    <li>&uparrow;&uparrow;&uparrow; jika rute diambil operator</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md">
                                <h4>Upgrade Tiket:</h4>
                                <ul>
                                    <li>VIP (Rp. 25.000,- / one way)</li>
                                </ul>
                            </div>
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

@section('scripts')
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b74dfc899d787f5"></script>
@endsection