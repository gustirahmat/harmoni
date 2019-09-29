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
                                        <td>Rp {{ number_format(600000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(700000, 0) }}</td>
                                        <td>Rp {{ number_format(750000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(875000 + 35000, 0) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Fan Kamar Mandi Dalam</td>
                                        <td>Rp {{ number_format(625000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(750000, 0) }}</td>
                                        <td>Rp {{ number_format(800000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(950000 + 35000, 0) }}</td>
                                    </tr>
                                    <tr>
                                        <td>AC Kamar Mandi Dalam</td>
                                        <td>Rp {{ number_format(750000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(800000, 0) }}</td>
                                        <td>Rp {{ number_format(1000000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1200000 + 35000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td rowspan="5">Hotel Bintang 3</td>
                                        <td>DSEASON - Superior</td>
                                        <td>Rp {{ number_format(1100000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1150000, 0) }}</td>
                                        <td>Rp {{ number_format(1550000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1750000 + 35000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>DSEASON - Bisnis</td>
                                        <td>Rp {{ number_format(1150000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1200000, 0) }}</td>
                                        <td>Rp {{ number_format(1650000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1950000 + 35000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>DSEASON - Executive</td>
                                        <td>Rp {{ number_format(1200000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1250000, 0) }}</td>
                                        <td>Rp {{ number_format(1750000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(2050000 + 35000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>JAVA P - Deluxe</td>
                                        <td>Rp {{ number_format(1300000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1350000, 0) }}</td>
                                        <td>Rp {{ number_format(1900000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(2300000 + 35000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>JAVA P - Executive</td>
                                        <td>Rp {{ number_format(1350000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1400000, 0) }}</td>
                                        <td>Rp {{ number_format(2050000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(2500000 + 35000, 0) }}</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="9">Hotel Standard / Melati</td>
                                        <td>PURI Karimun</td>
                                        <td>Rp {{ number_format(950000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1000000, 0) }}</td>
                                        <td>Rp {{ number_format(1300000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1500000 + 35000, 0) }}</td>
                                    </tr>
                                    <tr>
                                        <td>NEW OCEAN - Standard</td>
                                        <td>Rp {{ number_format(950000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1000000, 0) }}</td>
                                        <td>Rp {{ number_format(1300000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1500000 + 35000, 0) }}</td>
                                    </tr>
                                    <tr>
                                        <td>NEW OCEAN - Suite</td>
                                        <td>Rp {{ number_format(1000000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1050000, 0) }}</td>
                                        <td>Rp {{ number_format(1350000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1500000 + 35000, 0) }}</td>
                                    </tr>
                                    <tr>
                                        <td>THE KELAPA - Standard</td>
                                        <td>Rp {{ number_format(950000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1000000, 0) }}</td>
                                        <td>Rp {{ number_format(1300000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1500000 + 35000, 0) }}</td>
                                    </tr>
                                    <tr>
                                        <td>THE KELAPA - Suite</td>
                                        <td>Rp {{ number_format(1100000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1150000, 0) }}</td>
                                        <td>Rp {{ number_format(1600000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(2000000 + 35000, 0) }}</td>
                                    </tr>
                                    <tr>
                                        <td>MANGROVE INN</td>
                                        <td>Rp {{ number_format(950000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1000000, 0) }}</td>
                                        <td>Rp {{ number_format(1300000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1500000 + 35000, 0) }}</td>
                                    </tr>
                                    <tr>
                                        <td>ESCAPE - Standard</td>
                                        <td>Rp {{ number_format(950000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1000000, 0) }}</td>
                                        <td>Rp {{ number_format(1250000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1500000 + 35000, 0) }}</td>
                                    </tr>
                                    <tr>
                                        <td>ESCAPE - Deluxe</td>
                                        <td>Rp {{ number_format(1000000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1050000, 0) }}</td>
                                        <td>Rp {{ number_format(1300000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1600000 + 35000, 0) }}</td>
                                    </tr>
                                    <tr>
                                        <td>ESCAPE - Suite</td>
                                        <td>Rp {{ number_format(1050000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1100000, 0) }}</td>
                                        <td>Rp {{ number_format(1350000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1700000 + 35000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td rowspan="12">Cottage / Villa</td>
                                        <td>ASRI - Apung (Fan)</td>
                                        <td>Rp {{ number_format(850000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(900000, 0) }}</td>
                                        <td>Rp {{ number_format(1200000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1400000 + 35000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>ASRI - Cottage (AC)</td>
                                        <td>Rp {{ number_format(900000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(950000, 0) }}</td>
                                        <td>Rp {{ number_format(1300000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1500000 + 35000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>LUMBUNG</td>
                                        <td>Rp {{ number_format(1000000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1050000, 0) }}</td>
                                        <td>Rp {{ number_format(1350000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1600000 + 35000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>ALCHY - Cendana</td>
                                        <td>Rp {{ number_format(1050000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1100000, 0) }}</td>
                                        <td>Rp {{ number_format(1450000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1750000 + 35000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>ALCHY - Waru</td>
                                        <td>Rp {{ number_format(1200000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1250000, 0) }}</td>
                                        <td>Rp {{ number_format(1650000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(2000000 + 35000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>SUNRISE - Standard</td>
                                        <td>Rp {{ number_format(950000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1000000, 0) }}</td>
                                        <td>Rp {{ number_format(1300000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1450000 + 35000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>SUNRISE - Suite</td>
                                        <td>Rp {{ number_format(1000000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1050000, 0) }}</td>
                                        <td>Rp {{ number_format(1400000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1600000 + 35000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>SUNRISE - Executive</td>
                                        <td>Rp {{ number_format(1050000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1100000, 0) }}</td>
                                        <td>Rp {{ number_format(1450000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1700000 + 35000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>SUNRISE - Master</td>
                                        <td>Rp {{ number_format(1100000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1150000, 0) }}</td>
                                        <td>Rp {{ number_format(1550000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1900000 + 35000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>WISMA APUNG - Fan</td>
                                        <td>Rp {{ number_format(950000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1000000, 0) }}</td>
                                        <td>Rp {{ number_format(1250000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1450000 + 35000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>WISMA APUNG - AC</td>
                                        <td>Rp {{ number_format(1000000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1050000, 0) }}</td>
                                        <td>Rp {{ number_format(1400000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1600000 + 35000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>MIRABELLE JOGLO</td>
                                        <td>Rp {{ number_format(1000000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1050000, 0) }}</td>
                                        <td>Rp {{ number_format(1350000 + 35000, 0) }}</td>
                                        <td>Rp {{ number_format(1600000 + 35000, 0) }}</td>
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
                                <li>Anak usia di bawah 5 tahun dikenakan biaya administrasi</li>
                                <li>Harga dapat berubah saat musim liburan / peak season</li>
                                <li>Pendaftaran untuk 11 peserta ke atas bisa dilayani private trip</li>
                                <li>Permintaan private trip untuk reservasi dengan jumlah peserta kurang dari 10 orang akan dikenakan biaya tambahan sebesar (Rp {{ number_format(1500000, 0) }} per grup rombongan untuk paket trip 2H1M atau 3H2M, dan Rp {{ number_format(2500000, 0) }} untuk paket trip 4H3M dan akan mendapatkan full dokumentasi beserta video klip pendek)</li>
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
                                    <li>HTM Menjangan Resort (Rp {{ number_format(20000, 0) }})</li>
                                    <li>HTM Penangkaran Penyu (Rp {{ number_format(5000, 0) }})</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md">
                                <h4>Upgrade Tiket / Kapal:</h4>
                                <ul>
                                    <li>Ferry - VIP (Rp {{ number_format(35000, 0) }} / one way)</li>
                                    <li>Express Bahari Jepara - Executive (Rp {{ number_format(80000 + 20000, 0) }} / one way)</li>
                                    <li>Express Bahari Jepara - VIP (Rp {{ number_format(110000 + 35000) }} / one way)</li>
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