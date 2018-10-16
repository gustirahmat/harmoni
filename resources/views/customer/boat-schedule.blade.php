@extends('layouts.web')

@section('content')
    <div class="container py-5 my-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="title text-center py-4">
                            Jadwal Kapal Karimunjawa {{ date('Y') }} *
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
                                        <td scope="row" class="text-left">
                                            Ferry Siginjai
                                            {{--<div class="float-right">--}}
                                                {{--<a href="#" id="linkFotoKapal" title="Klik untuk melihat foto kapal" data-toggle="modal" data-target="#modalFotoKapal" data-kapal="/img/LogoLicious_20180609_200827.png"><i class="icon ion-ios-boat"></i> Lihat kapal</a>--}}
                                            {{--</div>--}}
                                        </td>
                                        <td scope="row" class="text-left">
                                            Jepara
                                            <div class="float-right">
                                                <a target="_blank" href="https://goo.gl/maps/eUCgM1tx3qp"><i class="icon ion-ios-pin"></i> Lihat peta</a>
                                            </div>
                                        </td>
                                        <td scope="row">07:00</td>
                                        <td scope="row" class="bg-danger text-white">OFF</td>
                                    </tr>
                                    <tr>
                                        {{--<td scope="row">Senin</td>--}}
                                        <td scope="row" class="text-left">
                                            Express Bahari
                                            {{--<div class="float-right">--}}
                                                {{--<a href="#" id="linkFotoKapal" title="Klik untuk melihat foto kapal" data-toggle="modal" data-target="#modalFotoKapal" data-kapal="/img/LogoLicious_20180609_205541.png"><i class="icon ion-ios-boat"></i> Lihat kapal</a>--}}
                                            {{--</div>--}}
                                        </td>
                                        <td scope="row" class="text-left">
                                            Jepara
                                            <div class="float-right">
                                                <a target="_blank" href="https://goo.gl/maps/eUCgM1tx3qp"><i class="icon ion-ios-pin"></i> Lihat peta</a>
                                            </div>
                                        </td>
                                        <td scope="row">09:00</td>
                                        <td scope="row">12:00</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td scope="row" rowspan="3">Selasa</td>
                                        <td scope="row" class="text-left">Express Bahari</td>
                                        <td scope="row" class="text-left">
                                            Semarang
                                            <div class="float-right">
                                                <a target="_blank" class="text-white" href="https://goo.gl/maps/A9YmE95y44N2"><i class="icon ion-ios-pin"></i> Lihat peta</a>
                                            </div>
                                        </td>
                                        <td scope="row">08:00</td>
                                        <td scope="row" rowspan="2" class="bg-danger text-white">OFF</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        {{--<td scope="row">Selasa</td>--}}
                                        <td scope="row" class="text-left">Express Bahari</td>
                                        <td scope="row" class="text-left">
                                            Jepara
                                            <div class="float-right">
                                                <a target="_blank" class="text-white" href="https://goo.gl/maps/eUCgM1tx3qp"><i class="icon ion-ios-pin"></i> Lihat peta</a>
                                            </div>
                                        </td>
                                        <td scope="row">09:00</td>
                                        {{--<td scope="row">-</td>--}}
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        {{--<td scope="row">Selasa</td>--}}
                                        <td scope="row" class="text-left">Ferry Siginjai</td>
                                        <td scope="row" class="text-left">
                                            Jepara
                                            <div class="float-right">
                                                <a target="_blank" class="text-white" href="https://goo.gl/maps/eUCgM1tx3qp"><i class="icon ion-ios-pin"></i> Lihat peta</a>
                                            </div>
                                        </td>
                                        <td scope="row" class="bg-danger text-white">OFF</td>
                                        <td scope="row">07:00</td>
                                    </tr>
                                    <tr>
                                        <td scope="row" rowspan="2">Rabu</td>
                                        <td scope="row" class="text-left">Ferry Siginjai</td>
                                        <td scope="row" class="text-left">
                                            Jepara
                                            <div class="float-right">
                                                <a target="_blank" href="https://goo.gl/maps/eUCgM1tx3qp"><i class="icon ion-ios-pin"></i> Lihat peta</a>
                                            </div>
                                        </td>
                                        <td scope="row">07:00</td>
                                        <td scope="row" class="bg-danger text-white">OFF</td>
                                    </tr>
                                    <tr>
                                        {{--<td scope="row">Rabu</td>--}}
                                        <td scope="row" class="text-left">Express Bahari</td>
                                        <td scope="row" class="text-left">
                                            Jepara
                                            <div class="float-right">
                                                <a target="_blank" href="https://goo.gl/maps/eUCgM1tx3qp"><i class="icon ion-ios-pin"></i> Lihat peta</a>
                                            </div>
                                        </td>
                                        <td scope="row" class="bg-danger text-white">OFF</td>
                                        <td scope="row">11:00</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td scope="row" rowspan="2">Kamis</td>
                                        <td scope="row" class="text-left">Ferry Siginjai</td>
                                        <td scope="row" class="text-left">
                                            Jepara
                                            <div class="float-right">
                                                <a target="_blank" class="text-white" href="https://goo.gl/maps/eUCgM1tx3qp"><i class="icon ion-ios-pin"></i> Lihat peta</a>
                                            </div>
                                        </td>
                                        <td scope="row" rowspan="2" class="bg-danger text-white">OFF</td>
                                        <td scope="row">07:00</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        {{--<td scope="row">Kamis</td>--}}
                                        <td scope="row" class="text-left">Express Bahari</td>
                                        <td scope="row" class="text-left">
                                            Semarang
                                            <div class="float-right">
                                                <a target="_blank" class="text-white" href="https://goo.gl/maps/A9YmE95y44N2"><i class="icon ion-ios-pin"></i> Lihat peta</a>
                                            </div>
                                        </td>
                                        {{--<td scope="row">OFF</td>--}}
                                        <td scope="row">12:00</td>
                                    </tr>
                                    <tr>
                                        <td scope="row" rowspan="4">Jumat</td>
                                        <td scope="row" class="text-left">Ferry Siginjai</td>
                                        <td scope="row" class="text-left">
                                            Jepara
                                            <div class="float-right">
                                                <a target="_blank" href="https://goo.gl/maps/eUCgM1tx3qp"><i class="icon ion-ios-pin"></i> Lihat peta</a>
                                            </div>
                                        </td>
                                        <td scope="row">06:30</td>
                                        <td scope="row">12:45</td>
                                    </tr>
                                    <tr>
                                        {{--<td scope="row">Jumat</td>--}}
                                        <td scope="row" class="text-left">Express Bahari</td>
                                        <td scope="row" class="text-left">
                                            Semarang
                                            <div class="float-right">
                                                <a target="_blank" href="https://goo.gl/maps/A9YmE95y44N2"><i class="icon ion-ios-pin"></i> Lihat peta</a>
                                            </div>
                                        </td>
                                        <td scope="row">08:00</td>
                                        <td scope="row" rowspan="2" class="bg-danger text-white">OFF</td>
                                    </tr>
                                    <tr>
                                        {{--<td scope="row">Jumat</td>--}}
                                        <td scope="row" class="text-left">Express Bahari</td>
                                        <td scope="row" class="text-left">
                                            Jepara
                                            <div class="float-right">
                                                <a target="_blank" href="https://goo.gl/maps/eUCgM1tx3qp"><i class="icon ion-ios-pin"></i> Lihat peta</a>
                                            </div>
                                        </td>
                                        <td scope="row">09:00</td>
                                        {{--<td scope="row">-</td>--}}
                                    </tr>
                                    <tr>
                                        {{--<td scope="row">Jumat</td>--}}
                                        <td scope="row" class="text-left">KMC Kartini</td>
                                        <td scope="row" class="text-left">
                                            Semarang
                                            <div class="float-right">
                                                <a target="_blank" href="https://goo.gl/maps/A9YmE95y44N2"><i class="icon ion-ios-pin"></i> Lihat peta</a>
                                            </div>
                                        </td>
                                        <td scope="row">09:00</td>
                                        <td scope="row">12:00</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        <td scope="row" rowspan="3">Sabtu</td>
                                        <td scope="row" class="text-left">Express Bahari</td>
                                        <td scope="row" class="text-left">
                                            Jepara
                                            <div class="float-right">
                                                <a target="_blank" class="text-white" href="https://goo.gl/maps/eUCgM1tx3qp"><i class="icon ion-ios-pin"></i> Lihat peta</a>
                                            </div>
                                        </td>
                                        <td scope="row">10:00</td>
                                        <td scope="row">07:00</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        {{--<td scope="row">Sabtu</td>--}}
                                        <td scope="row" class="text-left">Ferry Siginjai</td>
                                        <td scope="row" class="text-left">
                                            Jepara
                                            <div class="float-right">
                                                <a target="_blank" class="text-white" href="https://goo.gl/maps/eUCgM1tx3qp"><i class="icon ion-ios-pin"></i> Lihat peta</a>
                                            </div>
                                        </td>
                                        <td scope="row">07:00</td>
                                        <td scope="row">12:45</td>
                                    </tr>
                                    <tr class="bg-primary text-white">
                                        {{--<td scope="row">Sabtu</td>--}}
                                        <td scope="row" class="text-left">Pelni</td>
                                        <td scope="row" class="text-left">
                                            Semarang
                                            <div class="float-right">
                                                <a target="_blank" class="text-white" href="https://goo.gl/maps/A9YmE95y44N2"><i class="icon ion-ios-pin"></i> Lihat peta</a>
                                            </div>
                                        </td>
                                        <td scope="row">00:00</td>
                                        <td scope="row" class="bg-danger text-white">OFF</td>
                                    </tr>
                                    <tr>
                                        <td scope="row" rowspan="5">Minggu</td>
                                        <td scope="row" class="text-left">Ferry Siginjai</td>
                                        <td scope="row" class="text-left">
                                            Jepara
                                            <div class="float-right">
                                                <a target="_blank" href="https://goo.gl/maps/eUCgM1tx3qp"><i class="icon ion-ios-pin"></i> Lihat peta</a>
                                            </div>
                                        </td>
                                        <td scope="row" rowspan="5" class="bg-danger text-white">OFF</td>
                                        <td scope="row">07:00</td>
                                    </tr>
                                    <tr>
                                        {{--<td scope="row">Minggu</td>--}}
                                        <td scope="row" class="text-left">Express Bahari</td>
                                        <td scope="row" class="text-left">
                                            Jepara
                                            <div class="float-right">
                                                <a target="_blank" href="https://goo.gl/maps/eUCgM1tx3qp"><i class="icon ion-ios-pin"></i> Lihat peta</a>
                                            </div>
                                        </td>
                                        {{--<td scope="row">OFF</td>--}}
                                        <td scope="row">11:00</td>
                                    </tr>
                                    <tr>
                                        {{--<td scope="row">Minggu</td>--}}
                                        <td scope="row" class="text-left">KMC Kartini</td>
                                        <td scope="row" class="text-left">
                                            Semarang
                                            <div class="float-right">
                                                <a target="_blank" href="https://goo.gl/maps/A9YmE95y44N2"><i class="icon ion-ios-pin"></i> Lihat peta</a>
                                            </div>
                                        </td>
                                        {{--<td scope="row">OFF</td>--}}
                                        <td scope="row">11:00</td>
                                    </tr>
                                    <tr>
                                        {{--<td scope="row">Minggu</td>--}}
                                        <td scope="row" class="text-left">Express Bahari</td>
                                        <td scope="row" class="text-left">
                                            Semarang
                                            <div class="float-right">
                                                <a target="_blank" href="https://goo.gl/maps/A9YmE95y44N2"><i class="icon ion-ios-pin"></i> Lihat peta</a>
                                            </div>
                                        </td>
                                        {{--<td scope="row">OFF</td>--}}
                                        <td scope="row">12:00</td>
                                    </tr>
                                    <tr>
                                        {{--<td scope="row">Minggu</td>--}}
                                        <td scope="row" class="text-left">Pelni</td>
                                        <td scope="row" class="text-left">
                                            Semarang
                                            <div class="float-right">
                                                <a target="_blank" href="https://goo.gl/maps/A9YmE95y44N2"><i class="icon ion-ios-pin"></i> Lihat peta</a>
                                            </div>
                                        </td>
                                        {{--<td scope="row">OFF</td>--}}
                                        <td scope="row">13:00</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5" class="font-weight-bold text-danger"><i>* Jadwal pemberangkatan kapal dapat berubah sewaktu-waktu</i></td>
                                    </tr>
                                </tfoot>
                            </table>
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