<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfiguracionPrivacidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conf_privacidad', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('notificar_mensaje_like_productos');
            $table->boolean('notificar_mensaje_like_perfil');
            $table->boolean('notificar_mensaje_pedidos');
            $table->boolean('notificar_mensaje_muro');
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')
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
        Schema::dropIfExists('conf_privacidad');
    }
}
