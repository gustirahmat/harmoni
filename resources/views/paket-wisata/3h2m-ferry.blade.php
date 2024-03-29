@extends('layouts.web')

@section('content')
    <div class="container py-5 my-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="title m-b-md text-center">
                            Harga Paket 3H2M via Ferry Siginjai Jepara
                        </div>
                        <p class="lead font-weight-bold text-center">KEBERANGKATAN SENIN - RABU / RABU - JUMAT / JUMAT - MINGGU</p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="font-weight-bold bg-primary text-white text-center text-uppercase">
                                    <tr>
                                        <th>Jenis Penginapan</th>
                                        <th>Nama Penginapan</th>
                                        <th>Harga per Pax</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td rowspan="3">Homestay</td>
                                        <td>Fan Kamar Mandi Luar</td>
                                        <td>Rp {{ number_format(750000 + 35000 + 100000, 0) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Fan Kamar Mandi Dalam</td>
                                        <td>Rp {{ number_format(800000 + 35000 + 100000, 0) }}</td>
                                    </tr>
                                    <tr>
                                        <td>AC Kamar Mandi Dalam</td>
                                        <td>Rp {{ number_format(1000000 + 35000 + 100000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td rowspan="8">Hotel Bintang 3</td>
                                        <td>d'SEASON - Superior</td>
                                        <td>Rp {{ number_format(1550000 + 35000 + 100000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>d'SEASON - Bisnis</td>
                                        <td>Rp {{ number_format(1650000 + 35000 + 100000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>d'SEASON - Executive</td>
                                        <td>Rp {{ number_format(1750000 + 35000 + 100000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>Happinezz Hills <sup class="badge badge-success">Baru</sup></td>
                                        <td>Rp {{ number_format(1750000 + 35000 + 100000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>Java Paradise Resort - Standard</td>
                                        <td>Rp {{ number_format(1900000 - 145000 + 100000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>Java Paradise Resort - Superior</td>
                                        <td>Rp {{ number_format(1900000 - 55000 + 100000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>Java Paradise Resort - Deluxe</td>
                                        <td>Rp {{ number_format(1900000 + 35000 + 100000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>Java Paradise Resort - Executive</td>
                                        <td>Rp {{ number_format(2050000 + 35000 + 100000, 0) }}</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="4">Hotel Standard / Melati</td>
                                        <td>PURI Karimun</td>
                                        <td>Rp {{ number_format(1300000 + 35000 + 100000, 0) }}</td>
                                    </tr>
                                    <tr>
                                        <td>NEW OCEAN - Standard</td>
                                        <td>Rp {{ number_format(1300000 + 35000 + 100000, 0) }}</td>
                                    </tr>
                                    <tr>
                                        <td>NEW OCEAN - Suite</td>
                                        <td>Rp {{ number_format(1350000 + 35000 + 100000, 0) }}</td>
                                    </tr>
                                    <tr>
                                        <td>MANGROVE INN</td>
                                        <td>Rp {{ number_format(1300000 + 35000 + 100000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td rowspan="10">Cottage / Villa</td>
                                        <td>ASRI - Apung (Fan)</td>
                                        <td>Rp {{ number_format(1200000 + 35000 + 100000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>ASRI - Cottage (AC)</td>
                                        <td>Rp {{ number_format(1300000 + 35000 + 100000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>LUMBUNG</td>
                                        <td>Rp {{ number_format(1350000 + 35000 + 100000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>ALCHY - Cendana</td>
                                        <td>Rp {{ number_format(1450000 + 35000 + 100000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>ALCHY - Waru</td>
                                        <td>Rp {{ number_format(1650000 + 35000 + 100000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>SUNRISE - Standard</td>
                                        <td>Rp {{ number_format(1300000 + 35000 + 100000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>SUNRISE - Suite</td>
                                        <td>Rp {{ number_format(1400000 + 35000 + 100000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>SUNRISE - Executive</td>
                                        <td>Rp {{ number_format(1450000 + 35000 + 100000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>SUNRISE - Master</td>
                                        <td>Rp {{ number_format(1550000 + 35000 + 100000, 0) }}</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td>MIRABELLE JOGLO</td>
                                        <td>Rp {{ number_format(1350000 + 35000 + 100000 + 150000, 0) }}</td>
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
                                <li>Permintaan private trip untuk reservasi dengan jumlah peserta kurang dari 10 orang akan dikenakan biaya tambahan sebesar Rp {{ number_format(1500000, 0) }} per grup rombongan dan akan mendapatkan full dokumentasi beserta video klip pendek</li>
                                <li>Anak usia 5 tahun ke atas bayar full</li>
                                <li>Anak usia di bawah 5 tahun dikenakan biaya administrasi sebesar Rp {{ number_format(200000, 0) }} (Tanpa mendapatkan fasilitas)</li>
                                <li>Harga dapat berubah saat musim liburan / peak season</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="shadow-sm">
                <div class="card">
                    <div class="card-body">
                        <div class="title m-b-md text-center">
                            Fasilitas 3H2M via Ferry Siginjai Jepara
                        </div>
                        <div class="row">
                            <div class="col-12 col-md">
                                <h4>Include:</h4>
                                <ul>
                                    <li>Tiket Kapal Ferry Siginjai Jepara PP (Economy Class)</li>
                                    <li>Transport check-in & check-out</li>
                                    <li>Penginapan (isi 2 - 3 orang)</li>
                                    <li>Makan 6x (termasuk BBQ 1x)</li>
                                    <li>Transport wisata</li>
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
                                <h4>Upgrade Tiket:</h4>
                                <ul>
                                    <li>VIP (Rp {{ number_format(35000, 0) }} / one way)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="shadow-sm">
                <div class="card">
                    <div class="card-body">
                        <div class="title m-b-md text-center">
                            Itinerary 3H2M via Ferry Siginjai Jepara
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
                                    <td rowspan="15">Pertama</td>
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
                                    <td rowspan="4">11:00 - 13:30</td>
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
                                    <td rowspan="5">13:30 - 18:00</td>
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
                                    <td>Pantai Anora</td>
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
                                    <td rowspan="11">Kedua</td>
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
                                    <td class="bg-primary text-white font-italic">
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
                                    <td rowspan="8">Ketiga</td>
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
                                    <td>07:00 - 11:30</td>
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
                                <li>Penyeberangan dari Karimunjawa hari Rabu, Kamis, dan Jumat kapal diberangkatkan pukul 12:45</li>
                                <li>Kegiatan yang tidak tertera di itinerary di luar tanggung jawab kami</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="shadow-sm">
                <div class="card">
                    <div class="card-body">
                        <h4>Tulis Komentar:</h4>
                        <div class="fb-comments" data-href="{{ route('3h2m-ferry') }}" data-width="100%" data-numposts="10"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection