<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomponensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::dropIfExists('komponens');
        Schema::create('komponens', function (Blueprint $table) {
         $table->id();
       $table->string('id_komponen');
        $table->unsignedBigInteger('id_material');
    $table->foreign('id_material')
       ->references('id')->on('materials')
       ->onUpdate('cascade')
       ->onDelete('cascade');
       $table->string('nama_komponen');
       $table->string('satuan');
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
        Schema::dropIfExists('komponens');
    }
}
