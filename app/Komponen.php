<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komponen extends Model
{
     protected $fillable = [
        "id_komponen" 	,"id_material" 	,"nama_komponen", 	"satuan",
    ];
      public function material_cek(){
        return $this->belongsTo('App\Material','id_material','id');
    }
}
