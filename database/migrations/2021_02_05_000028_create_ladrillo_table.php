<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLadrilloTable extends Migration
{
    /**
     * Run the migrations.
     *  Los ladrillos forman el muro
     *  El tipo nos dice en que tabla de la bbdd buscar el ladrillo
     *  El id_ladrillo nos dice el ID del ladrillo DENTRO de la tabla obtenida
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ladrillo', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')
                                      ->on('users')
                                      ->onDelete('cascade')
                                      ->onUpdate('cascade');
            
            $table->integer('tipo')->unsigned();
            $table->foreign('tipo')->references('id')
                                      ->on('tipo_ladrillo')
                                      ->onDelete('cascade')
                                      ->onUpdate('cascade');
            
            $table->integer('ladrillo_id');
            
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
        Schema::dropIfExists('ladrillo');
    }
}
