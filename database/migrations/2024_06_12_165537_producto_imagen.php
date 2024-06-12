<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductoImagen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_imagen'); 
            $table->unsignedBigInteger('id_producto'); 
            $table->timestamps();
    
            // Claves foráneas
            $table->foreign('id_imagen')->references('id')->on('imagen')->onDelete('cascade');
            $table->foreign('id_producto')->references('id')->on('producto')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
