@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Boat Schedule {{ $boatschedule->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/boat-schedule') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/boat-schedule/' . $boatschedule->id . '/edit') }}" title="Edit Boat Schedule"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/boat-schedule' . '/' . $boatschedule->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Boat Schedule" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $boatschedule->id }}</td>
                                    </tr>
                                    <tr><th> Hari </th><td> {{ $boatschedule->hari }} </td></tr><tr><th> Nama Kapal </th><td> {{ $boatschedule->nama_kapal }} </td></tr><tr><th> Lokasi Pelabuhan </th><td> {{ $boatschedule->lokasi_pelabuhan }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
