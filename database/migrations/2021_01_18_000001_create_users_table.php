<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('alias');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('image');
            $table->string('ciudad');
            $table->string('pais');
            $table->string('sobre_mi');
            $table->string('ultimo_acceso');
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')
                                      ->on('user_type')
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
        Schema::dropIfExists('users');
    }
}
