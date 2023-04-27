<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoLadrilloTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_ladrillo', function (Blueprint $table) {
            $table->increments('id');
            /*
             * El muro está compuesto por los siguientes tipos de ladrillos
             * Tipo 1: Publicación
             * Tipo 2: Comentario producto
             * Tipo 3: Mensaje administración
             * Tipo 4: Mensaje de pedido
             * 
             */
            $table->integer('tipo');
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
        Schema::dropIfExists('tipo_ladrillo');
    }
}
