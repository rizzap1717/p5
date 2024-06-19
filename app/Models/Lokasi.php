<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama_lokasi'];
    protected $visible = ['id','nama_lokasi'];
    public function wisata(){
        return $this->hasMany(wisata::class);
    }
}
