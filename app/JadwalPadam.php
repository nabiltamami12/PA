<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalPadam extends Model
{
   protected $fillable = [
        "jadwal_padam" 	,"awal_padam" 	,"akhir_padam"
        // , 	"wilayah_padam"
        , "deskripsi_pekerjaan", "unit_kerja" , 'penyulang', 'tim' , 'id_trafo' , "latitude", "longitude",
    ];
    public function trafo_cek()
{
return $this->belongsTo('App\Trafo','id_trafo','id');
    }

  //    public function trafo_cek(){
  // return $this->hasMany(Trafo::class,'id_trafo','id');
        // return $this->belongsTo('App\Material','id_material','id');
    // }
}
