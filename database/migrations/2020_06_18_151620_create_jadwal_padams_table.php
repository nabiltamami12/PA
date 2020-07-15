<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalPadamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('jadwal_padams');
        
        Schema::create('jadwal_padams', function (Blueprint $table) {
         // $table->id();
           $table->increments('id');          
           $table->date('jadwal_padam');
           $table->time('awal_padam');
           $table->time('akhir_padam');
            $table->string('wilayah_padam');
            $table->string('deskripsi_pekerjaan');
            $table->string('unit_kerja');
            $table->string('penyulang');
            $table->string('tim');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_padams');
    }
}
