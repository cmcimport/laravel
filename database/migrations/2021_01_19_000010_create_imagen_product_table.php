<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagenProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagen_product', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('image_url');
            
            $table->integer('producto_id')->unsigned();
            $table->foreign('producto_id')->references('id')
                                      ->on('product')
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
        Schema::dropIfExists('imagen_product');
    }
}
