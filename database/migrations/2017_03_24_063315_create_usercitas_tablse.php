<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsercitasTablse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 public function up()
    {
        Schema::create('user_citas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion')->nullable();
            $table->string('hora_inicio')->nullable();
            $table->integer('duracion')->nullable();
            $table->double('rango_pago')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('token')->nullable();

             $table->integer('cita_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table  ->foreign('cita_id')
                    ->references('id')
                    ->on('citas')
                    ->onUpdate("cascade")
                    ->onDelete("cascade");

            $table  ->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onUpdate("cascade")
                    ->onDelete("cascade");

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
        Schema::dropIfExists('user_citas');
    }
}
