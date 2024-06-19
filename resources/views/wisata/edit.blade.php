@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Dashboard') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('wisata.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('wisata.update', $wisata->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama wisata</label>
                            <input type="text" class="form-control @error('nama_w') is-invalid @enderror" name="nama_wisata"
                                value="{{ $wisata->nama_wisata }}" placeholder="nama wisata" required>
                            @error('nama_wisata')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control" class="form-control @error('deskripsi') is-invalid @enderror"
                                name="deskripsi" rows="3" placeholder="deskirpsi"
                                required>{{ $wisata->deskripsi }}</textarea>
                            @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea class="form-control" class="form-control @error('alamat') is-invalid @enderror"
                                name="alamat" rows="3" placeholder="alamat"
                                required>{{ $wisata->alamat }}</textarea>
                            @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga tiket</label>
                            <input type="number" class="form-control @error('harga_tiket') is-invalid @enderror" name="harga_tiket"
                                value="{{ $wisata->harga_tiket }}" placeholder="Harga" required>
                            @error('harga_tiket')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">id kategori</label>
                            <input type="number" class="form-control @error('id_kategori') is-invalid @enderror" name="id_kategori"
                                value="{{ $wisata->id_kategori }}" placeholder="id_kategori" required>
                            @error('id_kategori')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">id lokasi</label>
                            <input type="number" class="form-control @error('id_lokasi') is-invalid @enderror" name="id_lokasi"
                                value="{{ $wisata->id_lokasi }}" placeholder="id_lokasi" required>
                            @error('id_lokasi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                                value="{{ $wisata->image }}"></input>
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-sm btn-warning">RESET</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection