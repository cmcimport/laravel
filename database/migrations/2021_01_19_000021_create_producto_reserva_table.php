
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_reserva', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('cantidad');
            $table->double('precio_unidad');
                        
            $table->integer('reserva_id')->unsigned();
            $table->foreign('reserva_id')->references('id')
                                      ->on('reserva')
                                      ->onDelete('cascade')
                                      ->onUpdate('cascade');
            
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
        Schema::dropIfExists('producto_reserva');
    }
}
