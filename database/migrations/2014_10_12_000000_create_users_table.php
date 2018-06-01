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
            $table->boolean('tipo');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('correo')->unique();
            $table->string('password');
            $table->boolean('menor_edad')->nullable();
            $table->string('tutor')->nullable();
            $table->integer('dni')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->boolean('sexo')->nullable();
            $table->string('domicilio')->nullable();
            $table->string('localidad')->nullable();
            $table->string('telefono')->nullable();
            $table->text('alergias')->nullable();
            $table->text('hereditarios')->nullable();
            $table->integer('id_odontograma')->nullable();
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
