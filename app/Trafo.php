<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trafo extends Model
{
    //
      protected $fillable = [
      'id_user','name_user','tanggal', 'kode_trafo', 'lokasi', 'status', 'deskripsi', 'verifikasi',
    ];
}
