<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wisata extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama_wisata','deskripsi','alamat','harga_tiket','id_kategori','id_lokasi','image'];
    protected $visible = ['id','nama_wisata','deskripsi','alamat','harga_tiket','id_kategori','id_lokasi','image'];
    public $timestamp = true;
    
    public function kategori(){
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
    public function lokasi(){
        return $this->belongsTo(Lokasi::class, 'id_lokasi');
    }
}

