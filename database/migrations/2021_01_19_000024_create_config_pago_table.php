<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigPagoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_pago', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('transferencia_bancaria');
            $table->boolean('contrareembolso');
            $table->boolean('tarjeta_de_credito');
            $table->boolean('recogida_en_tienda');
            $table->boolean('paypal');
            
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
        Schema::dropIfExists('config_pago');
    }
}
