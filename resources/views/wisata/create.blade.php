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
                    <form action="{{ route('wisata.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama wisata</label>
                            <input type="text" class="form-control @error('nama_wisata') is-invalid @enderror" name="nama_wisata"
                                value="{{ old('nama_wisata') }}" placeholder="Masukkan Nama Wisata" required>
                            @error('nama_wisata')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control" class="form-control @error('deskripsi') is-invalid @enderror"
                                name="deskripsi" value="{{ old('deskripsi') }}" rows="3" placeholder="deskripsi"
                                required></textarea>
                                
                            @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea class="form-control" class="form-control @error('alamat') is-invalid @enderror"
                                name="alamat" value="{{ old('alamat') }}" rows="3" placeholder="alamat"
                                required></textarea>
                            @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga Tiket</label>
                            <input type="number" class="form-control @error('harga_tiket') is-invalid @enderror" name="harga_tiket"
                                value="{{ old('harga_tiket') }}" placeholder="Harga" required>
                            @error('harga_tiket')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <select name="id_kategori" class="form-select">
                                <option value=""disabled selected>Pilih Kategori</option>
                                @forelse ($kategori as $data)

                                    <option value="{{ $data->id }}" @error('id_kategori') is-invalid @enderror>
                                        {{ $data->nama_kategori }}</option>
                                @empty
                                    <option value="" disabled>Data belum tersedia</option>
                                @endforelse
                            </select>
                            @error('id_kategori')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Lokasi</label>
                            <select name="id_lokasi" class="form-select">
                                <option value=""disabled selected>Pilih lokasi</option>
                                @forelse ($lokasi as $data)

                                    <option value="{{ $data->id }}" @error('id_lokasi') is-invalid @enderror>
                                        {{ $data->nama_lokasi }}</option>
                                @empty
                                    <option value="" disabled>Data belum tersedia</option>
                                @endforelse
                            </select>
                            @error('id_lokasi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                                value="{{ old('image') }}" required></input>
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-sm btn-warning">Reset</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection