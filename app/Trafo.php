<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trafo extends Model
{


 protected $fillable = [
        "kode_trafo","lokasi_trafo", "rancangan_trafo",
    ];

     public function petugas_cek(){
        return $this->belongsTo('App\Petugas');
    }  
}
