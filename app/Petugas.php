<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
	

	protected $fillable = [
    "id_petugas" , "nama_petugas" , "kelompok_petugas", "jadwal_petugas" , "kode_trafo" , "lokasi_trafo",

     ];
     public function trafo_cek(){
        return $this->belongsTo('App\Trafo','kode_trafo','id');
    }
}
