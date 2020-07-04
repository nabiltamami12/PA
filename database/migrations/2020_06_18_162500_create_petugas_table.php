<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::dropIfExists('petugas');
         
        Schema::create('petugas', function (Blueprint $table) {
         
         $table->id();
            $table->string('id_petugas');
           $table->string('nama_petugas');
           $table->string('kelompok_petugas');
           $table->string('jadwal_petugas');
               $table->unsignedBigInteger('kode_trafo');
    $table->foreign('kode_trafo')
       ->references('id')->on('trafos')
       ->onUpdate('cascade')
       ->onDelete('cascade');
            $table->string('lokasi_trafo');
        
     
});
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::dropIfExists('petugas');
    }
}
