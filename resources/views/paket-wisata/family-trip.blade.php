@extends('layouts.web')

@section('content')
    <div class="container py-5 my-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1 class="title m-b-md text-center">
                    Family Trip Harmoni Karimunjawa
                </h1>
                <video playsinline loop muted autoplay poster="{{ asset('img/LogoLicious_20180609_200440.png') }}" width="100%">
                    <source src="{{ asset('video/Family-Trip-Harmoni-Karimunjawa.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="title m-b-md text-center">
                            Harga Paket Family Trip
                        </h2>
                        <p class="lead font-weight-bold text-center">Start Jepara</p>
                        <div class="table-responsive">
                            <table class="table table-bordered text-center">
                                <thead class="bg-primary text-white text-uppercase">
                                <tr>
                                    <th rowspan="2" class="align-middle">Jenis Penginapan</th>
                                    <th rowspan="2" class="align-middle">Nama Penginapan</th>
                                    <th colspan="4">Paket Trip</th>
                                </tr>
                                <tr>
                                    <th>2H1M</th>
                                    <th>3H2M</th>
                                    <th>4H3M</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td rowspan="2" class="align-middle">Homestay</td>
                                    <td>Fan Kamar Mandi Dalam</td>
                                    <td>Rp {{ number_format(5125000, 0) }}</td>
                                    <td>Rp {{ number_format(5925000, 0) }}</td>
                                    <td>Rp {{ number_format(6925000, 0) }}</td>
                                </tr>
                                <tr>
                                    <td>AC Kamar Mandi Dalam</td>
                                    <td>Rp {{ number_format(5625000, 0) }}</td>
                                    <td>Rp {{ number_format(6725000, 0) }}</td>
                                    <td>Rp {{ number_format(7950000, 0) }}</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td rowspan="2" class="align-middle">Hotel Bintang 3</td>
                                    <td>d'SEASON</td>
                                    <td>Rp {{ number_format(7450000, 0) }}</td>
                                    <td>Rp {{ number_format(9750000, 0) }}</td>
                                    <td>Rp {{ number_format(11350000, 0) }}</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>Java Paradise Resort</td>
                                    <td>Rp {{ number_format(7600000, 0) }}</td>
                                    <td>Rp {{ number_format(10200000, 0) }}</td>
                                    <td>Rp {{ number_format(11800000, 0) }}</td>
                                </tr>
                                <tr>
                                    <td rowspan="2" class="align-middle">Hotel Standard / Melati</td>
                                    <td>PURI Karimun</td>
                                    <td>Rp {{ number_format(6300000, 0) }}</td>
                                    <td>Rp {{ number_format(7600000, 0) }}</td>
                                    <td>Rp {{ number_format(8600000, 0) }}</td>
                                </tr>
                                <tr>
                                    <td>MANGROVE INN</td>
                                    <td>Rp {{ number_format(6425000, 0) }}</td>
                                    <td>Rp {{ number_format(7925000, 0) }}</td>
                                    <td>Rp {{ number_format(9150000, 0) }}</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>Cottage / Villa</td>
                                    <td>SUNRISE</td>
                                    <td>Rp {{ number_format(6400000, 0) }}</td>
                                    <td>Rp {{ number_format(7800000, 0) }}</td>
                                    <td>Rp {{ number_format(8900000, 0) }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="font-weight-bold font-italic text-danger">
                            <p class="text-uppercase" style="font-size: x-large;">Catatan:</p>
                            <ul>
                                <li>Jika sewaktu penyeberangan hanya menyediakan kapal Ferry Siginjai maka akan kami usahakan untuk tiket kelas VIP</li>
                                <li>Harga yang tertera untuk 4 orang (1 grup). Terdapat penyesuaian harga apabila jumlah peserta kurang atau lebih dari 4 orang</li>
                                <li>Peserta <u>Warga Negara Asing (WNA)</u> dikenakan biaya tambahan sebesar Rp {{ number_format(150000, 0) }} per orang</li>
                                <li>Harga dapat berubah saat musim liburan / peak season</li>
                                <li>Meeting Point di Pelabuhan Kartini, Jepara</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="shadow-sm">
                <div class="card">
                    <div class="card-body">
                        <h2 class="title m-b-md text-center">
                            Fasilitas Family Trip
                        </h2>
                        <div class="row">
                            <div class="col-12 col-md">
                                <h4>Include:</h4>
                                <ol>
                                    <li>Tiket Kapal Express Bahari Jepara PP (Executive Class)</li>
                                    <li>Transport check-in & check-out</li>
                                    <li>Makan 3x / 6x / 8x</li>
                                    <li>Transport wisata</li>
                                    <li>Guide Lokal</li>
                                    <li>Alat snorkeling + life jacket</li>
                                    <li>Full dokumentasi (DSLR + DRONE + UNDERWATER)</li>
                                    <li>Biaya sandar perahu</li>
                                    <li>Air mineral</li>
                                    <li>Asuransi Penyeberangan</li>
                                    <li>Perlengkapan P3K</li>
                                    <li>Video klip durasi 1 menit</li>
                                </ol>
                            </div>
                            <div class="col-12 col-md">
                                <h4>Exclude:</h4>
                                <ol>
                                    <li>HTM Menjangan Resort (Rp {{ number_format(20000, 0) }})</li>
                                    <li>HTM Penangkaran Penyu (Rp {{ number_format(5000, 0) }})</li>
                                </ol>
                            </div>
                            <div class="col-12 col-md">
                                <h4>Upgrade Tiket / Kapal:</h4>
                                <ol>
                                    <li>Express Bahari Jepara - VIP (Rp {{ number_format(35000, 0) }} / one way / orang)</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="shadow-sm">
                <div class="card">
                    <div class="card-body">
                        <div class="title m-b-md text-center">
                            Itinerary Family Trip
                        </div>
                        <p class="lead font-weight-bold text-center text-uppercase">Meeting Point di Pelabuhan Kartini, Jepara</p>
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
                                    <table class="table table-borderless">
                                        <caption class="sr-only">Itinerary Family Trip 2H1M Harmoni Karimunjawa</caption>
                                        <thead class="font-weight-bold text-center text-uppercase">
                                        <tr>
                                            <th>Hari</th>
                                            <th>Waktu</th>
                                            <th>Aktivitas</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td rowspan="15">Pertama</td>
                                            <td rowspan="3">08:00 - 09:00</td>
                                            <td>Pembagian tiket kapal</td>
                                        </tr>
                                        <tr>
                                            <td>Boarding tiket</td>
                                        </tr>
                                        <tr>
                                            <td>Masuk kapal</td>
                                        </tr>
                                        <tr>
                                            <td>09:00 - 11:00</td>
                                            <td>Penyeberangan menuju Karimunjawa</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="5">11:00 - 13:30</td>
                                            <td>Penjemputan menggunakan mobil/motor</td>
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
                                        <tr class="bg-primary text-white">
                                            <td rowspan="4">13:30 - 18:00</td>
                                            <td class="font-italic">
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
                                        <tr class="bg-primary">
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="10">Kedua</td>
                                            <td rowspan="9">07:00 - 11:00</td>
                                            <td>Packing</td>
                                        </tr>
                                        <tr>
                                            <td>Sarapan (disediakan)</td>
                                        </tr>
                                        <tr>
                                            <td>Check-out penginapan</td>
                                        </tr>
                                        <tr class="bg-primary text-white">
                                            <td class="font-italic">
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
                                            <td>Menuju pelabuhan Penyeberangan</td>
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
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-3h2m-tab">
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <caption class="sr-only">Itinerary Family Trip 3H2M</caption>
                                        <thead class="font-weight-bold text-center text-uppercase">
                                        <tr>
                                            <th>Hari</th>
                                            <th>Waktu</th>
                                            <th>Aktivitas</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td rowspan="15">Pertama</td>
                                            <td rowspan="3">08:00 - 09:00</td>
                                            <td>Pembagian tiket kapal</td>
                                        </tr>
                                        <tr>
                                            <td>Boarding tiket</td>
                                        </tr>
                                        <tr>
                                            <td>Masuk kapal</td>
                                        </tr>
                                        <tr>
                                            <td>09:00 - 11:00</td>
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
                                        <tr class="bg-primary text-white">
                                            <td rowspan="5">13:30 - 18:00</td>
                                            <td class="font-italic">
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
                                        <tr class="bg-primary">
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="11">Kedua</td>
                                            <td rowspan="3">07:30 - 08:30</td>
                                            <td>Sarapan (disediakan)</td>
                                        </tr>
                                        <tr>
                                            <td>Persiapan Wisata Laut</td>
                                        </tr>
                                        <tr>
                                            <td>Menuju Pelabuhan Wisata</td>
                                        </tr>
                                        <tr class="bg-primary text-white">
                                            <td rowspan="6">08:30 - 18:00</td>
                                            <td class="font-italic">
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
                                        <tr class="bg-primary">
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="8">Ketiga</td>
                                            <td rowspan="2">08:00 - 10:00</td>
                                            <td>Sarapan (disediakan)</td>
                                        </tr>
                                        <tr>
                                            <td>Packing / Acara bebas</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="5">10:00 - 11:00</td>
                                            <td>Check-out penginapan</td>
                                        </tr>
                                        <tr>
                                            <td>Diantar ke pelabuhan menggunakan mobil/motor</td>
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
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-4h3m-tab">
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <caption class="sr-only">Itinerary Family Trip 4H3M</caption>
                                        <thead class="font-weight-bold text-center text-uppercase">
                                        <tr>
                                            <th>Hari</th>
                                            <th>Waktu</th>
                                            <th>Aktivitas</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td rowspan="10">Pertama</td>
                                            <td rowspan="3">08:00 - 09:00</td>
                                            <td>Pembagian tiket kapal</td>
                                        </tr>
                                        <tr>
                                            <td>Boarding tiket</td>
                                        </tr>
                                        <tr>
                                            <td>Masuk kapal</td>
                                        </tr>
                                        <tr>
                                            <td>09:00 - 11:00</td>
                                            <td>Penyeberangan menuju Karimunjawa</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="4">11:00 - 18:00</td>
                                            <td>Penjemputan menggunakan mobil/motor</td>
                                        </tr>
                                        <tr>
                                            <td>Check-in penginapan</td>
                                        </tr>
                                        <tr>
                                            <td>Makan siang (disediakan)</td>
                                        </tr>
                                        <tr>
                                            <td>Istirahat / Acara Bebas</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">19:00 - selesai</td>
                                            <td>Makan malam (disediakan)</td>
                                        </tr>
                                        <tr>
                                            <td>Acara bebas</td>
                                        </tr>
                                        <tr class="bg-primary">
                                            <td colspan="3"></td>
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
                                        <tr class="bg-primary text-white">
                                            <td rowspan="6">08:30 - 18:00</td>
                                            <td class="font-italic">
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
                                        <tr class="bg-primary">
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="11">Ketiga</td>
                                            <td rowspan="3">07:00 - 08:30</td>
                                            <td>Sarapan (disediakan)</td>
                                        </tr>
                                        <tr>
                                            <td>Persiapan Wisata Laut</td>
                                        </tr>
                                        <tr>
                                            <td>Menuju Pelabuhan Wisata</td>
                                        </tr>
                                        <tr class="bg-primary text-white">
                                            <td rowspan="6">08:30 - 18:00</td>
                                            <td class="font-italic">
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
                                            <td rowspan="2">19:00 - selesai</td>
                                            <td>Makan malam (tidak disediakan)</td>
                                        </tr>
                                        <tr>
                                            <td>Acara bebas</td>
                                        </tr>
                                        <tr class="bg-primary">
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="8">Keempat</td>
                                            <td rowspan="2">08:00 - 10:00</td>
                                            <td>Sarapan (disediakan)</td>
                                        </tr>
                                        <tr>
                                            <td>Packing / Acara bebas</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="5">10:00 - 11:00</td>
                                            <td>Check-out penginapan</td>
                                        </tr>
                                        <tr>
                                            <td>Diantar ke pelabuhan menggunakan mobil/motor</td>
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
                        <h4>Tulis Komentar:</h4>
                        <div class="fb-comments" data-href="{{ route('family-trip') }}" data-width="100%" data-numposts="10"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection