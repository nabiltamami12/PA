<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{

     protected $fillable = [
        'id_material','nama_material',
    ];
     public function komponen_cek(){
        return $this->belongsTo('App\Komponen');
    }
    public function laporan_cek(){
  return $this->belongsTo(KebutuhanMaterial::class,'id','id');
        // return $this->belongsTo('App\Material','id_material','id');
    }
}
