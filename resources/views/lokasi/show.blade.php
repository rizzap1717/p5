@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">1
                        {{ __('lokasi') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('lokasi.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <hr>
                    <h4>{{ $lokasi->nama_lokasi }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection