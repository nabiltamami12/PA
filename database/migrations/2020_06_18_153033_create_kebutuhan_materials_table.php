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
         // $table->id();
       // $table->integer('nomor_sap');
           $table->increments('id'); 
           $table->date('tanggal');         
             $table->integer('id_material')->unsigned();
   
       $table->string('jumlah');
       $table->string('status');
       $table->string('keterangan');
            $table->timestamps();
        });

        Schema::table('kebutuhan_materials', function($table)
{
    $table->foreign('id_material')
        ->references('id')->on('materials')->onUpdate('cascade')
        ->onDelete('cascade');
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
