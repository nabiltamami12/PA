<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrafosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trafos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user');
            $table->string('name_user');
            $table->date('tanggal');
            $table->string('kode_trafo')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('status')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('verifikasi');
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
        Schema::dropIfExists('trafos');
    }
}
