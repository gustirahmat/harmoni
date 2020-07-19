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
                        <div class="title text-center py-4">
                            Jadwal Kapal Karimunjawa {{ date('Y') }}
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered text-center">
                                <thead class="font-weight-bold bg-primary text-white text-uppercase">
                                    <tr>
                                        <th scope="col">Hari</th>
                                        <th scope="col">Nama Kapal</th>
                                        <th scope="col">Pelabuhan</th>
                                        <th scope="col" width="20%">Menuju Karimunjawa</th>
                                        <th scope="col" width="20%">Dari Karimunjawa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row" rowspan="2">Senin</td>
                                        <td scope="row">Express Bahari</td>
                                        <td scope="row">Jepara</td>
                                        <td scope="row">09:00</td>
                                        <td scope="row">12:00</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Ferry Siginjai</td>
                                        <td scope="row">Jepara</td>
                                        <td scope="row">07:00</td>
                                        <td scope="row" class="bg-danger text-white">OFF</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td scope="row" rowspan="2">Selasa</td>
                                        <td scope="row">Express Bahari</td>
                                        <td scope="row">Jepara</td>
                                        <td scope="row">09:00</td>
                                        <td scope="row">11:00</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td scope="row">Ferry Siginjai</td>
                                        <td scope="row">Jepara</td>
                                        <td scope="row" class="bg-danger text-white">OFF</td>
                                        <td scope="row">07:00</td>
                                    </tr>
                                    <tr>
                                        <td scope="row" rowspan="2">Rabu</td>
                                        <td scope="row">Express Bahari</td>
                                        <td scope="row">Jepara</td>
                                        <td scope="row">09:00</td>
                                        <td scope="row">11:00</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Ferry Siginjai</td>
                                        <td scope="row">Jepara</td>
                                        <td scope="row">06:30</td>
                                        <td scope="row">12:30</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td scope="row" rowspan="2">Kamis</td>
                                        <td scope="row">Ferry Siginjai</td>
                                        <td scope="row">Jepara</td>
                                        <td scope="row">06:30</td>
                                        <td scope="row">12:30</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td scope="row">Express Bahari</td>
                                        <td scope="row">Jepara</td>
                                        <td scope="row">12:00</td>
                                        <td scope="row">09:00</td>
                                    </tr>
                                    <tr>
                                        <td scope="row" rowspan="3">Jumat</td>
                                        <td scope="row">Express Bahari</td>
                                        <td scope="row">Jepara</td>
                                        <td scope="row">09:00 & 13:30</td>
                                        <td scope="row">09:00</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Ferry Siginjai</td>
                                        <td scope="row">Jepara</td>
                                        <td scope="row">06:30</td>
                                        <td scope="row">12:45</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">KMC Kartini</td>
                                        <td scope="row">Semarang</td>
                                        <td scope="row">09:00</td>
                                        <td scope="row" class="bg-danger text-white">OFF</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td scope="row" rowspan="3">Sabtu</td>
                                        <td scope="row">Express Bahari</td>
                                        <td scope="row">Jepara</td>
                                        <td scope="row">10:00</td>
                                        <td scope="row">07:00</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td scope="row">Ferry Siginjai</td>
                                        <td scope="row">Jepara</td>
                                        <td scope="row">07:00</td>
                                        <td scope="row" class="bg-danger text-white">OFF</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td scope="row">Pelni</td>
                                        <td scope="row">Semarang</td>
                                        <td scope="row">00:00</td>
                                        <td scope="row" class="bg-danger text-white">OFF</td>
                                    </tr>
                                    <tr>
                                        <td scope="row" rowspan="4">Minggu</td>
                                        <td scope="row">Express Bahari</td>
                                        <td scope="row">Jepara</td>
                                        <td scope="row">12:00</td>
                                        <td scope="row">09:00 & 11:00</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Ferry Siginjai</td>
                                        <td scope="row">Jepara</td>
                                        <td scope="row" class="bg-danger text-white">OFF</td>
                                        <td scope="row">07:00</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">KMC Kartini</td>
                                        <td scope="row">Semarang</td>
                                        <td scope="row" class="bg-danger text-white">OFF</td>
                                        <td scope="row">11:00</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Pelni</td>
                                        <td scope="row">Semarang</td>
                                        <td scope="row" class="bg-danger text-white">OFF</td>
                                        <td scope="row">13:00</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5" class="font-weight-bold text-danger"><i>Jadwal pemberangkatan kapal dapat berubah sewaktu-waktu</i></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <hr>
                        <div>
                            <h4>Lokasi Pelabuhan Kartini Jepara</h4>
                            <iframe title="Lokasi Pelabuhan Kartini Jepara" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1014728.7207619788!2d110.1351053!3d-6.548926!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e711eee195348e5%3A0xe254700a5bd4fa0d!2sKartini+Jepara+Port!5e0!3m2!1sen!2sid!4v1551534229355" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            <hr>
                            <h4>Lokasi Pelabuhan Tanjung Mas Semarang</h4>
                            <iframe title="Lokasi Pelabuhan Tanjung Mas Semarang" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.526662624531!2d110.42183201477313!3d-6.947028894980952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70f49923fd2e61%3A0xfa6ae037b9996be8!2sTerminal+Penumpang+Tanjung+Emas+Semarang!5e0!3m2!1sen!2sid!4v1551534173255" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <hr class="shadow-sm">
                <div class="card">
                    <div class="card-body">
                        <h4>Tulis Komentar:</h4>
                        <div class="fb-comments" data-href="{{ route('boat-schedule') }}" data-width="100%" data-numposts="10"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection