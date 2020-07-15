<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KebutuhanMaterial extends Model
{
     protected $fillable = [
      'id_material' ,'tanggal','status', 'jumlah', 'keterangan',
    ];//

      public function material_cek(){
  return $this->belongsTo(Material::class,'id_material','id');
        // return $this->belongsTo('App\Material','id_material','id');
    }
      public function komponen_cek(){
        return $this->belongsTo('App\Komponen','id_komponen','id');
    }
}
