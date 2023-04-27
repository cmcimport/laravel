<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigPagoTransferenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_pago_transferencia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titular');
            $table->string('n_cuenta');
            $table->string('instrucciones');
            $table->boolean('estado'); // Define el estado por defecto para los pedidos
            
            $table->integer('config_pago_id')->unsigned();
            $table->foreign('config_pago_id')->references('tienda_id')
                                      ->on('config_pago')
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
        Schema::dropIfExists('config_pago_transferencia');
    }
}
