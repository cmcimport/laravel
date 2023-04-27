<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estado'); // en proceso / cancelado
            $table->boolean('acepta_user');
            $table->boolean('acepta_seller');
            $table->string('fecha_confirmacion'); // ambos aceptan y ya aparecen los medios de pago

            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')
                                      ->on('users')
                                      ->onDelete('cascade')
                                      ->onUpdate('cascade');
            
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
        Schema::dropIfExists('reserva');
    }
}
