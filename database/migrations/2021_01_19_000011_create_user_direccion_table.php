<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDireccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_direccion', function (Blueprint $table) {
            $table->increments('id');
            
            $table->boolean('por_defecto');
            $table->string('amigable');
            $table->string('nombre_recibe');
            $table->string('apellido_recibe');
            $table->string('calle_avenida');
            $table->string('numero');
            $table->string('telefono');
            $table->string('localidad');
            $table->string('codigo_postal');
            $table->string('dni_cif');
            
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')
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
        Schema::dropIfExists('user_direccion');
    }
}
