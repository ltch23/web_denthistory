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
            $table->string('sangre')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('sexo')->nullable();
            $table->string('residencia')->nullable();
            $table->string('clinica_pac')->nullable();
            $table->string('estado_civil')->nullable();
            $table->integer('num_hijos')->nullable();
            $table->string('telefono')->nullable();
            $table->string('telefono_emer')->nullable();
            $table->text('alergias')->nullable();
            $table->text('hereditarios')->nullable();
            $table->text('cirugia')->nullable();
            $table->integer('id_odontograma')->nullable();
            $table->text('domicilio')->nullable();
            $table->text('localidad')->nullable();
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
