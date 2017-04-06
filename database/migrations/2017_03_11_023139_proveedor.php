<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Proveedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('reputacion');
            $table->integer('edad');
            $table->string('cedula');
            $table->string('idiomas');
            $table->string('certificado_medico');
            $table->string('fotos');
            $table->string('videos');
            $table->string('presentacion');
            $table->string('inf_bancaria');
            $table->boolean('active')->default(true);
            $table->boolean('online')->default(true);

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
        Schema::dropIfExists('proveedor');
    }
}
