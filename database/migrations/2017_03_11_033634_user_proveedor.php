<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserProveedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_cita_proveedor', function (Blueprint $table) {
            $table->increments('id');

             $table->integer('usercita_id')->unsigned();
            $table->integer('proveedor_id')->unsigned();

            $table  ->foreign('usercita_id')
                    ->references('id')
                    ->on('user_citas')
                    ->onUpdate("cascade")
                    ->onDelete("cascade");

            $table  ->foreign('proveedor_id')
                    ->references('id')
                    ->on('proveedor')
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
        Schema::dropIfExists('user_proveedor');
    }
}
