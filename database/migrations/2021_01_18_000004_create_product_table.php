<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('titulo');
            $table->string('descripcion');
            $table->double('precio');
            $table->boolean('aprobado'); // Por defecto todos aprobados, no visible para el vendedor, para tareas administrativas
            
            
            $table->integer('tienda_id')->unsigned();
            $table->foreign('tienda_id')->references('id')
                                      ->on('tienda')
                                      ->onDelete('cascade')
                                      ->onUpdate('cascade');
            
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
        Schema::dropIfExists('product');
    }
}
