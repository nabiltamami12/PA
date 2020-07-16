<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trafo extends Model
{

 protected $fillable = [
        "kode_trafo","alamat", "seksen", "deskripsi", "gambar", "latitude", "longitude",
    ];

     public function petugas_cek(){
        return $this->belongsTo('App\Petugas');
    }  
    public function padam_cek(){
        return $this->belongsTo('App\JadwalPadam');
    }  
}
