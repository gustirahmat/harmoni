@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">OpenTripSchedule {{ $opentripschedule->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/open-trip-schedules') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/open-trip-schedules/' . $opentripschedule->id . '/edit') }}" title="Edit OpenTripSchedule"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/opentripschedules' . '/' . $opentripschedule->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete OpenTripSchedule" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $opentripschedule->id }}</td>
                                    </tr>
                                    <tr><th> Nama Trip </th><td> {{ $opentripschedule->nama_trip }} </td></tr><tr><th> Kuota Trip </th><td> {{ $opentripschedule->kuota_trip }} </td></tr><tr><th> Tanggal Trip </th><td> {{ $opentripschedule->tanggal_trip }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
