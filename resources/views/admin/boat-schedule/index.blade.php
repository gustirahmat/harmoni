@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Boat Schedule</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/boat-schedule/create') }}" class="btn btn-success btn-sm" title="Add New Boat Schedule">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/admin/boat-schedule') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Hari</th><th>Nama Kapal</th><th>Lokasi Pelabuhan</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($boatschedule as $item)
                                    <tr>
                                        <td>{{ $loop->iteration ?? $item->id }}</td>
                                        <td>{{ $item->hari }}</td><td>{{ $item->nama_kapal }}</td><td>{{ $item->lokasi_pelabuhan }}</td>
                                        <td>
                                            <a href="{{ url('/admin/boat-schedule/' . $item->id) }}" title="View Boat Schedule"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/boat-schedule/' . $item->id . '/edit') }}" title="Edit Boat Schedule"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/admin/boat-schedule' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Boat Schedule" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $boatschedule->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
