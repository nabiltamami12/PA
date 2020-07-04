<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKebutuhanMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('kebutuhan_materials');
        Schema::create('kebutuhan_materials', function (Blueprint $table) {
         $table->id();
             $table->unsignedBigInteger('id_material');
    $table->foreign('id_material')
       ->references('id')->on('materials')
       ->onUpdate('cascade')
       ->onDelete('cascade');
           $table->unsignedBigInteger('id_komponen');
    $table->foreign('id_komponen')
       ->references('id')->on('komponens')
       ->onUpdate('cascade')
       ->onDelete('cascade');
       $table->integer('jumlah');
       $table->string('keterangan');
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
        Schema::dropIfExists('kebutuhan_materials');
    }
}
