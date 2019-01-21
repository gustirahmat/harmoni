@extends('layouts.web')

@section('content')
    <div class="container py-5 my-5">
        <div class="row justify-content-center">
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
                                    <td>Rp. 600.000,-</td>
                                    <td>Rp. 750.000,-</td>
                                    <td>Rp. 875.000,-</td>
                                </tr>
                                <tr>
                                    <td>Fan Kamar Mandi Dalam</td>
                                    <td>Rp. 625.000,-</td>
                                    <td>Rp. 800.000,-</td>
                                    <td>Rp. 950.000,-</td>
                                </tr>
                                <tr>
                                    <td>AC Kamar Mandi Dalam</td>
                                    <td>Rp. 750.000,-</td>
                                    <td>Rp. 1.000.000,-</td>
                                    <td>Rp. 1.200.000,-</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td rowspan="5">Hotel Bintang 3</td>
                                    <td>DSEASON - Superior</td>
                                    <td>Rp. 1.100.000,-</td>
                                    <td>Rp. 1.550.000,-</td>
                                    <td>Rp. 1.750.000,-</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>DSEASON - Bisnis</td>
                                    <td>Rp. 1.150.000,-</td>
                                    <td>Rp. 1.650.000,-</td>
                                    <td>Rp. 1.950.000,-</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>DSEASON - Executive</td>
                                    <td>Rp. 1.200.000,-</td>
                                    <td>Rp. 1.750.000,-</td>
                                    <td>Rp. 2.050.000,-</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>JAVA P - Deluxe</td>
                                    <td>Rp. 1.300.000,-</td>
                                    <td>Rp. 1.900.000,-</td>
                                    <td>Rp. 2.300.000,-</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>JAVA P - Executive</td>
                                    <td>Rp. 1.350.000,-</td>
                                    <td>Rp. 2.050.000,-</td>
                                    <td>Rp. 2.500.000,-</td>
                                </tr>
                                <tr>
                                    <td rowspan="9">Hotel Standard / Melati</td>
                                    <td>PURI Karimun</td>
                                    <td>Rp. 950.000,-</td>
                                    <td>Rp. 1.300.000,-</td>
                                    <td>Rp. 1.500.000,-</td>
                                </tr>
                                <tr>
                                    <td>NEW OCEAN - Standard</td>
                                    <td>Rp. 950.000,-</td>
                                    <td>Rp. 1.300.000,-</td>
                                    <td>Rp. 1.500.000,-</td>
                                </tr>
                                <tr>
                                    <td>NEW OCEAN - Suite</td>
                                    <td>Rp. 1.000.000,-</td>
                                    <td>Rp. 1.350.000,-</td>
                                    <td>Rp. 1.500.000,-</td>
                                </tr>
                                <tr>
                                    <td>THE KELAPA - Standard</td>
                                    <td>Rp. 950.000,-</td>
                                    <td>Rp. 1.300.000,-</td>
                                    <td>Rp. 1.500.000,-</td>
                                </tr>
                                <tr>
                                    <td>THE KELAPA - Suite</td>
                                    <td>Rp. 1.100.000,-</td>
                                    <td>Rp. 1.600.000,-</td>
                                    <td>Rp. 2.000.000,-</td>
                                </tr>
                                <tr>
                                    <td>MANGROVE INN</td>
                                    <td>Rp. 950.000,-</td>
                                    <td>Rp. 1.300.000,-</td>
                                    <td>Rp. 1.500.000,-</td>
                                </tr>
                                <tr>
                                    <td>ESCAPE - Standard</td>
                                    <td>Rp. 950.000,-</td>
                                    <td>Rp. 1.250.000,-</td>
                                    <td>Rp. 1.500.000,-</td>
                                </tr>
                                <tr>
                                    <td>ESCAPE - Deluxe</td>
                                    <td>Rp. 1.000.000,-</td>
                                    <td>Rp. 1.300.000,-</td>
                                    <td>Rp. 1.600.000,-</td>
                                </tr>
                                <tr>
                                    <td>ESCAPE - Suite</td>
                                    <td>Rp. 1.050.000,-</td>
                                    <td>Rp. 1.350.000,-</td>
                                    <td>Rp. 1.700.000,-</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td rowspan="12">Cottage / Villa</td>
                                    <td>ASRI - Apung (Fan)</td>
                                    <td>Rp. 850.000,-</td>
                                    <td>Rp. 1.200.000,-</td>
                                    <td>Rp. 1.400.000,-</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>ASRI - Cottage (AC)</td>
                                    <td>Rp. 900.000,-</td>
                                    <td>Rp. 1.300.000,-</td>
                                    <td>Rp. 1.500.000,-</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>LUMBUNG</td>
                                    <td>Rp. 1.000.000,-</td>
                                    <td>Rp. 1.350.000,-</td>
                                    <td>Rp. 1.600.000,-</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>ALCHY - Cendana</td>
                                    <td>Rp. 1.050.000,-</td>
                                    <td>Rp. 1.450.000,-</td>
                                    <td>Rp. 1.750.000,-</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>ALCHY - Waru</td>
                                    <td>Rp. 1.200.000,-</td>
                                    <td>Rp. 1.650.000,-</td>
                                    <td>Rp. 2.000.000,-</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>SUNRISE - Standard</td>
                                    <td>Rp. 950.000,-</td>
                                    <td>Rp. 1.300.000,-</td>
                                    <td>Rp. 1.450.000,-</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>SUNRISE - Suite</td>
                                    <td>Rp. 1.000.000,-</td>
                                    <td>Rp. 1.400.000,-</td>
                                    <td>Rp. 1.600.000,-</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>SUNRISE - Executive</td>
                                    <td>Rp. 1.050.000,-</td>
                                    <td>Rp. 1.450.000,-</td>
                                    <td>Rp. 1.700.000,-</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>SUNRISE - Master</td>
                                    <td>Rp. 1.100.000,-</td>
                                    <td>Rp. 1.550.000,-</td>
                                    <td>Rp. 1.900.000,-</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>WISMA APUNG - Fan</td>
                                    <td>Rp. 950.000,-</td>
                                    <td>Rp. 1.250.000,-</td>
                                    <td>Rp. 1.450.000,-</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>WISMA APUNG - AC</td>
                                    <td>Rp. 1.000.000,-</td>
                                    <td>Rp. 1.400.000,-</td>
                                    <td>Rp. 1.600.000,-</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>MIRABELLE JOGLO</td>
                                    <td>Rp. 1.000.000,-</td>
                                    <td>Rp. 1.350.000,-</td>
                                    <td>Rp. 1.600.000,-</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="font-weight-bold font-italic text-danger">
                            <p class="text-uppercase" style="font-size: x-large;">Catatan:</p>
                            <ul>
                                <li>Pendaftaran minimal untuk 2 orang</li>
                                <li>Harga yang tertera untuk 1 orang</li>
                                <li>Anak usia 5 tahun ke atas bayar full</li>
                                <li>Anak usia di bawah 5 tahun dikenakan biaya administrasi</li>
                                <li>Harga dapat berubah saat musim liburan / peak season</li>
                                <li>Pendaftaran untuk 11 peserta ke atas bisa dilayani private trip</li>
                                <li>Permintaan private trip untuk peserta kurang dari 11 orang dikenakan biaya tambahan</li>
                                <li>Meeting Point di Pelabuhan</li>
                            </ul>
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
                                    <li>HTM Menjangan Resort (Rp. 20.000,-)</li>
                                    <li>HTM Penangkaran Penyu (Rp. 5.000,-)</li>
                                </ul>
                            </div>
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