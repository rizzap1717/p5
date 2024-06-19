@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('wisata') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('wisata.create') }}" class="btn btn-sm btn-outline-primary">Tambah Data</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama wisata</th>
                                    <th>Deskripsi</th>
                                    <th>Alamat</th>
                                    <th>Harga Tiket</th>
                                    <th>ID Kategori</th>
                                    <th>ID Lokasi</th>
                                    <th>Image</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @forelse ($wisata as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->nama_wisata }}</td>
                                    <td>{{ $data->deskripsi}}</td>
                                    <td>{{ $data->alamat}}</td>
                                    <td>{!! $data->harga_tiket !!}</td>
                                    <td>{{ $data->kategori->nama_kategori}}</td>
                                    <td>{{ $data->lokasi->nama_lokasi}}</td>
                                    <td>
                                        <img src="{{ asset('/storage/wisatas/' . $data->image) }}" class="rounded"
                                            style="width: 150px">
                                    </td>
                                        <td>
                                        <form action="{{ route('wisata.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('wisata.show', $data->id) }}"
                                                class="btn btn-sm btn-warning">Show</a> |
                                            <a href="{{ route('wisata.edit', $data->id) }}"
                                                class="btn btn-sm btn-success">Edit</a> |
                                            <button type="submit" onsubmit="return confirm('Are You Sure ?');"
                                                class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center">
                                        Data data belum Tersedia.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {!! $wisata->withQueryString()->links('pagination::bootstrap-4') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection