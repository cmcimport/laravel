<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_product', function (Blueprint $table) {
            $table->increments('id');
            
            $table->boolean('requiere_envio');
            $table->boolean('recogida');
            $table->boolean('mostrar_precio');
            $table->boolean('precio_negociable');
            $table->boolean('venta_al_por_mayor');
            $table->boolean('requiere_instalacion');
            $table->boolean('requiere_cita_previa');
            $table->double('precio');
            
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
        Schema::dropIfExists('config_product');
    }
}
