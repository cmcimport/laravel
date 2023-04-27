<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoACategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_a_categoria', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('producto_id')->unsigned();
            $table->foreign('producto_id')->references('id')
                                      ->on('product')
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
        Schema::dropIfExists('producto_a_categoria');
    }
}
