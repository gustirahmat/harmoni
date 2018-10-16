@extends('layouts.web')

@section('content')
    <div class="container py-5 my-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="title m-b-md text-center">
                            Harga Paket Open Trip
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="font-weight-bold bg-primary text-white text-center text-uppercase">
                                    <tr>
                                        <th rowspan="2" class="align-middle">Jenis Penginapan</th>
                                        <th rowspan="2" class="align-middle">Nama Penginapan</th>
                                        <th colspan="4">Harga (/pax)</th>
                                    </tr>
                                    <tr>
                                        <th>2H1M Ferry</th>
                                        <th>2H2M Pelni</th>
                                        <th>3H2M Ferry</th>
                                        <th>4H3M Ferry</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td rowspan="3">Homestay</td>
                                        <td>Fan Kamar Mandi Luar</td>
                                        <td>Rp. 600.000,-</td>
                                        <td>Rp. 700.000,-</td>
                                        <td>Rp. 750.000,-</td>
                                        <td>Rp. 875.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>Fan Kamar Mandi Dalam</td>
                                        <td>Rp. 625.000,-</td>
                                        <td>Rp. 750.000,-</td>
                                        <td>Rp. 800.000,-</td>
                                        <td>Rp. 950.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>AC Kamar Mandi Dalam</td>
                                        <td>Rp. 750.000,-</td>
                                        <td>Rp. 800.000,-</td>
                                        <td>Rp. 1.000.000,-</td>
                                        <td>Rp. 1.200.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td rowspan="5">Hotel Bintang 3</td>
                                        <td>DSEASON - Superior</td>
                                        <td>Rp. 1.100.000,-</td>
                                        <td>Rp. 1.150.000,-</td>
                                        <td>Rp. 1.550.000,-</td>
                                        <td>Rp. 1.750.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>DSEASON - Bisnis</td>
                                        <td>Rp. 1.150.000,-</td>
                                        <td>Rp. 1.200.000,-</td>
                                        <td>Rp. 1.650.000,-</td>
                                        <td>Rp. 1.950.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>DSEASON - Executive</td>
                                        <td>Rp. 1.200.000,-</td>
                                        <td>Rp. 1.250.000,-</td>
                                        <td>Rp. 1.750.000,-</td>
                                        <td>Rp. 2.050.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>JAVA P - Deluxe</td>
                                        <td>Rp. 1.300.000,-</td>
                                        <td>Rp. 1.350.000,-</td>
                                        <td>Rp. 1.900.000,-</td>
                                        <td>Rp. 2.300.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>JAVA P - Executive</td>
                                        <td>Rp. 1.350.000,-</td>
                                        <td>Rp. 1.400.000,-</td>
                                        <td>Rp. 2.050.000,-</td>
                                        <td>Rp. 2.500.000,-</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="9">Hotel Standard / Melati</td>
                                        <td>PURI Karimun</td>
                                        <td>Rp. 950.000,-</td>
                                        <td>Rp. 1.000.000,-</td>
                                        <td>Rp. 1.300.000,-</td>
                                        <td>Rp. 1.500.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>NEW OCEAN - Standard</td>
                                        <td>Rp. 950.000,-</td>
                                        <td>Rp. 1.000.000,-</td>
                                        <td>Rp. 1.300.000,-</td>
                                        <td>Rp. 1.500.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>NEW OCEAN - Suite</td>
                                        <td>Rp. 1.000.000,-</td>
                                        <td>Rp. 1.050.000,-</td>
                                        <td>Rp. 1.350.000,-</td>
                                        <td>Rp. 1.500.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>THE KELAPA - Standard</td>
                                        <td>Rp. 950.000,-</td>
                                        <td>Rp. 1.000.000,-</td>
                                        <td>Rp. 1.300.000,-</td>
                                        <td>Rp. 1.500.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>THE KELAPA - Suite</td>
                                        <td>Rp. 1.100.000,-</td>
                                        <td>Rp. 1.150.000,-</td>
                                        <td>Rp. 1.600.000,-</td>
                                        <td>Rp. 2.000.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>MANGROVE INN</td>
                                        <td>Rp. 950.000,-</td>
                                        <td>Rp. 1.000.000,-</td>
                                        <td>Rp. 1.300.000,-</td>
                                        <td>Rp. 1.500.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>ESCAPE - Standard</td>
                                        <td>Rp. 950.000,-</td>
                                        <td>Rp. 1.000.000,-</td>
                                        <td>Rp. 1.250.000,-</td>
                                        <td>Rp. 1.500.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>ESCAPE - Deluxe</td>
                                        <td>Rp. 1.000.000,-</td>
                                        <td>Rp. 1.050.000,-</td>
                                        <td>Rp. 1.300.000,-</td>
                                        <td>Rp. 1.600.000,-</td>
                                    </tr>
                                    <tr>
                                        <td>ESCAPE - Suite</td>
                                        <td>Rp. 1.050.000,-</td>
                                        <td>Rp. 1.100.000,-</td>
                                        <td>Rp. 1.350.000,-</td>
                                        <td>Rp. 1.700.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td rowspan="12">Cottage / Villa</td>
                                        <td>ASRI - Apung (Fan)</td>
                                        <td>Rp. 850.000,-</td>
                                        <td>Rp. 900.000,-</td>
                                        <td>Rp. 1.200.000,-</td>
                                        <td>Rp. 1.400.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>ASRI - Cottage (AC)</td>
                                        <td>Rp. 900.000,-</td>
                                        <td>Rp. 950.000,-</td>
                                        <td>Rp. 1.300.000,-</td>
                                        <td>Rp. 1.500.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>LUMBUNG</td>
                                        <td>Rp. 1.000.000,-</td>
                                        <td>Rp. 1.050.000,-</td>
                                        <td>Rp. 1.350.000,-</td>
                                        <td>Rp. 1.600.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>ALCHY - Cendana</td>
                                        <td>Rp. 1.050.000,-</td>
                                        <td>Rp. 1.100.000,-</td>
                                        <td>Rp. 1.450.000,-</td>
                                        <td>Rp. 1.750.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>ALCHY - Waru</td>
                                        <td>Rp. 1.200.000,-</td>
                                        <td>Rp. 1.250.000,-</td>
                                        <td>Rp. 1.650.000,-</td>
                                        <td>Rp. 2.000.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>SUNRISE - Standard</td>
                                        <td>Rp. 950.000,-</td>
                                        <td>Rp. 1.000.000,-</td>
                                        <td>Rp. 1.300.000,-</td>
                                        <td>Rp. 1.450.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>SUNRISE - Suite</td>
                                        <td>Rp. 1.000.000,-</td>
                                        <td>Rp. 1.050.000,-</td>
                                        <td>Rp. 1.400.000,-</td>
                                        <td>Rp. 1.600.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>SUNRISE - Executive</td>
                                        <td>Rp. 1.050.000,-</td>
                                        <td>Rp. 1.100.000,-</td>
                                        <td>Rp. 1.450.000,-</td>
                                        <td>Rp. 1.700.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>SUNRISE - Master</td>
                                        <td>Rp. 1.100.000,-</td>
                                        <td>Rp. 1.150.000,-</td>
                                        <td>Rp. 1.550.000,-</td>
                                        <td>Rp. 1.900.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>WISMA APUNG - Fan</td>
                                        <td>Rp. 950.000,-</td>
                                        <td>Rp. 1.000.000,-</td>
                                        <td>Rp. 1.250.000,-</td>
                                        <td>Rp. 1.450.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>WISMA APUNG - AC</td>
                                        <td>Rp. 1.000.000,-</td>
                                        <td>Rp. 1.050.000,-</td>
                                        <td>Rp. 1.400.000,-</td>
                                        <td>Rp. 1.600.000,-</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>MIRABELLE JOGLO</td>
                                        <td>Rp. 1.000.000,-</td>
                                        <td>Rp. 1.050.000,-</td>
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
                            Fasilitas Open Trip
                        </div>
                        <div class="row">
                            <div class="col-12 col-md">
                                <h4>Include:</h4>
                                <ul>
                                    <li>Tiket Kapal Ferry Siginjai Jepara PP (Economy Class)</li>
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
                                    <li>HTM Kolam Hiu (Rp. 40.000,-)</li>
                                    <li>HTM Menjangan Resort (Rp. 20.000,-)</li>
                                    <li>HTM Penangkaran Penyu (Rp. 5.000,-)</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md">
                                <h4>Upgrade Tiket / Kapal:</h4>
                                <ul>
                                    <li>Ferry - VIP (Rp. 25.000,- / one way)</li>
                                    <li>Express Bahari Jepara - Executive (Rp. 80.000,- / one way)</li>
                                    <li>Express Bahari Jepara - VIP (Rp. 110.000,- / one way)</li>
                                    <li>Express Bahari Semarang - Executive (Rp. 175.000,- / one way)</li>
                                    <li>Express Bahari Semarang - VIP (Rp. 275.000,- / one way)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="shadow-sm">
                <div class="card">
                    <div class="card-body">
                        <h4>Tulis Komentar:</h4>
                        <div class="fb-comments" data-href="{{ route('open-trip') }}" data-width="100%" data-numposts="10"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection