@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('wisata') }}
                    </div>
                    <div class="float-end">
                        <a href="{{url ('/')}}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <img src="{{ asset('storage/wisatas/' . $wisata->image) }}" class="w-100 rounded">
                    <hr>
                    <h4>{{ $wisata->nama }}</h4>
                    <p class="tmt-3">
                        {!! $wisata->deskripsi !!}
                    </p>
                    <p class="tmt-3">
                        {!! $wisata->alamat !!}
                    </p>
                    <p class="tmt-3">
                        Harga Tiket : Rp.{{ number_format($wisata->harga_tiket, 2) }}
                    </p>
                    <p class="tmt-3">
                        Kategori : {{$wisata->kategori->nama_kategori}}
                    </p>
                    <p class="tmt-3">
                        Lokasi : {{$wisata->lokasi->nama_lokasi}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection