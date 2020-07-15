<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalPadam extends Model
{
   protected $fillable = [
        "jadwal_padam" 	,"awal_padam" 	,"akhir_padam", 	"wilayah_padam", "deskripsi_pekerjaan", "unit_kerja" , 'penyulang', 'tim' ,
    ];
    public function user()
{
return $this->belongsTo('App\User','id');
    }
}
