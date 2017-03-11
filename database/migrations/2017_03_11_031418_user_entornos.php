<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserEntornos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_entornos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->integer('entornos_id')->unsigned();

            $table  ->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onUpdate("cascade")
                    ->onDelete("cascade");

            $table  ->foreign('entornos_id')
                    ->references('id')
                    ->on('entornos')
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
        Schema::dropIfExists('users_entornos');
    }
}
