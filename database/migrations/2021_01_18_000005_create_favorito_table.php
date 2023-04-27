<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoritoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorito', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('product_id')->unsigned(); // esta es la columna en la tabla que creamos
            $table->foreign('product_id')->references('id') // columna a la que se le hace referencia
                                      ->on('product') // aquí le decimos de que tabla extrae el contenido
                                      ->onDelete('cascade')
                                      ->onUpdate('cascade');
            
            
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')
                                      ->on('users')
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
        Schema::dropIfExists('favorito');
    }
}
