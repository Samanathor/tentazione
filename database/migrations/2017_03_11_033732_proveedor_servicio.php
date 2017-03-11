<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProveedorServicio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor_servicio', function (Blueprint $table) {
            $table->increments('id');

             $table->integer('servicio_id')->unsigned();
            $table->integer('proveedor_id')->unsigned();

            $table  ->foreign('servicio_id')
                    ->references('id')
                    ->on('servicios')
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
        Schema::dropIfExists('proveedor_servicio');
    }
}
