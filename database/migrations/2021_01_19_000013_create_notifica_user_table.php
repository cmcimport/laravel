<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificaUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifica_user', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('usuario_envia_id');
            $table->integer('usuario_recibe_id');
            $table->boolean('notificado_por_email');
            $table->string('fecha_hora');
            $table->boolean('notificacion_vista');
            $table->string('enlace');
            
            $table->integer('tipo_notificacion')->unsigned();
            $table->foreign('tipo_notificacion')->references('id')
                                      ->on('notifica_tipo')
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
        Schema::dropIfExists('notifica_user');
    }
}
