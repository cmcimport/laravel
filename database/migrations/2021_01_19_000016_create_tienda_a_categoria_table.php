<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiendaACategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tienda_a_categoria', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('tienda_id')->unsigned();
            $table->foreign('tienda_id')->references('id')
                                      ->on('tienda')
                                      ->onDelete('cascade')
                                      ->onUpdate('cascade');
            
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')
                                      ->on('categoria')
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
        Schema::dropIfExists('tienda_a_categoria');
    }
}
