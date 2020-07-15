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
         
         // $table->id();
           $table->increments('id');          

            $table->string('id_petugas');
           $table->string('nama_petugas');
           $table->string('kelompok_petugas');
           $table->date('jadwal_petugas');
           $table->integer('kode_trafo');
    //            $table->unsignedBigInteger('kode_trafo');
    // $table->foreign('kode_trafo')
    //    ->references('id')->on('trafos')
    //    ->onUpdate('cascade')
    //    ->onDelete('cascade');
            $table->string('lokasi_trafo');
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
            Schema::dropIfExists('petugas');
    }
}
