@extends('layouts.web')

@section('content')
    <div class="container py-5 my-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="title text-center py-4">
                            Testimony Para Tamu Kami
                        </div>
                        <p class="lead font-weight-bold text-center">Ini kata mereka tentang <span class="sr-only">Harmoni Karimunjawa</span><span> <img src="{{ asset('img/logo.png') }}" id="Logo Harmoni Karimunjawa" alt="Logo Harmoni Karimunjawa"> </span> </p>
                        @inject('testimony','harmoniKarimunJawa\Testimony')
                        @foreach($testimony->all() as $item)
                            <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3" style="border-left: thick solid dodgerblue">
                                <div class="my-3 py-3">
                                    <blockquote class="blockquote">
                                        <p class="mb-0">{{ $item->testimoni }}</p>
                                        <div class="blockquote-footer"><cite title="Tamu Harmoni Karimunjawa">{{ $item->nama_tamu }}, {{ $item->domisili_tamu }}</cite></div>
                                    </blockquote>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection