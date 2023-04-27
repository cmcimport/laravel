
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValoraReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valora_reserva', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('like');
            $table->integer('dislike');
            
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')
                                      ->on('users')
                                      ->onDelete('cascade')
                                      ->onUpdate('cascade');
            
            $table->integer('reserva_id')->unsigned();
            $table->foreign('reserva_id')->references('id')
                                      ->on('reserva')
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
        Schema::dropIfExists('valora_reserva');
    }
}
