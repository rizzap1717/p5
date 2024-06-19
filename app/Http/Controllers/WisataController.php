<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Lokasi;
use App\Models\wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wisata = wisata::with('kategori','lokasi')->latest()->paginate(3);
        $kategori = Kategori::all();
        $lokasi = Lokasi::all();
        return view('wisata.index', compact('wisata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        $lokasi = Lokasi::all();
        return view('wisata.create', compact('kategori','lokasi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_wisata' => 'required|min:3',
            'deskripsi' => 'required|min:5',
            'alamat' => 'required|min:5',
            'harga_tiket' => 'required',
            'id_kategori' => 'required',
            'id_lokasi' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $wisata = new Wisata();
        $wisata->nama_wisata = $request->nama_wisata;
        $wisata->deskripsi = $request->deskripsi;
        $wisata->alamat = $request->alamat;
        $wisata->harga_tiket = $request->harga_tiket;
        $wisata->id_kategori = $request->id_kategori;
        $wisata->id_lokasi = $request->id_lokasi;
        // upload image
        $image = $request->file('image');
        $image->storeAs('public/wisatas', $image->hashName());
        $wisata->image = $image->hashName();
        $wisata->save();
        return redirect()->route('wisata.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wisata = wisata::findOrFail($id);
        return view('show', compact('wisata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::all();
        $lokasi = Lokasi::all();
        $wisata = wisata::findOrFail($id);
        return view('wisata.edit', compact('wisata','kategori','lokasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_wisata' => 'required|min:3',
            'deskripsi' => 'required|min:10',
            'alamat' => 'required|min:5',
            'harga_tiket' => 'required',
            'id_kategori' => 'required',
            'id_lokasi' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $wisata = Wisata::findOrFail($id);
        $wisata->nama_wisata = $request->nama_wisata;
        $wisata->deskripsi = $request->deskripsi;
        $wisata->alamat = $request->alamat;
        $wisata->harga_tiket = $request->harga_tiket;
        $wisata->id_kategori = $request->id_kategori;
        $wisata->id_lokasi = $request->id_lokasi;
        // upload image
        $image = $request->file('image');
        $image->storeAs('public/wisatas', $image->hashName());
        // delete old image
        Storage::delete('public/wisatas/' . $wisata->image);

        $wisata->image = $image->hashName();
        $wisata->save();
        return redirect()->route('wisata.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wisata = wisata::findOrFail($id);
        Storage::delete('public/wisatas/' . $wisata->image);
        $wisata->delete();
        return redirect()->route('wisata.index');
    }
}
