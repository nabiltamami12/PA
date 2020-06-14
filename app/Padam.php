<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Padam extends Model
{
      protected $fillable = [
           'tanggal', 'kode_trafo', 'lokasi','deskripsi',
    ];
}
