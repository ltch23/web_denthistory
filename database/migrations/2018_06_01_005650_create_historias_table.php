<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario')->nullable();
            $table->integer('id_doctor')->nullable();
            $table->date('fecha')->nullable();
            $table->longText('motivo_consulta');
            $table->longText('diagnostico')->nullable();
            $table->longText('observaciones')->nullable();
            $table->longText('tratamiento')->nullable();
            $table->text('radiografia')->nullable();
            $table->string('img_radiografia')->nullable();
            $table->integer('id_odontograma')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historias');
    }
}
