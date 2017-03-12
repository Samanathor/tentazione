<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('name')->nullable();
            $table->string('apellidos')->nullable();
            $table->integer('celular')->nullable();
            $table->boolean('active')->default(true)->nullable();
            $table->boolean('fumador')->nullable();
            $table->date('fecha_nac')->nullable();
            $table->string('sexo')->nullable();
            $table->string('alias')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->char('api_token', 60)->nullable();
            $table->rememberToken();
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
