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
            $table->increments('no');
            $table->string('kode_trafo')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('status')->nullable();
            $table->string('deskrpsi')->nullable();
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
