<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOdontogramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('odontogramas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario');
            $table->string('diente1')->nullable();
            $table->string('diente2')->nullable();
            $table->string('diente3')->nullable();
            $table->string('diente4')->nullable();
            $table->string('diente5')->nullable();
            $table->string('diente6')->nullable();
            $table->string('diente7')->nullable();
            $table->string('diente8')->nullable();
            $table->string('diente9')->nullable();
            $table->string('diente10')->nullable();
            $table->string('diente11')->nullable();
            $table->string('diente12')->nullable();
            $table->string('diente13')->nullable();
            $table->string('diente14')->nullable();
            $table->string('diente15')->nullable();
            $table->string('diente16')->nullable();
            $table->string('diente17')->nullable();
            $table->string('diente18')->nullable();
            $table->string('diente19')->nullable();
            $table->string('diente20')->nullable();
            $table->string('diente21')->nullable();
            $table->string('diente22')->nullable();
            $table->string('diente23')->nullable();
            $table->string('diente24')->nullable();
            $table->string('diente25')->nullable();
            $table->string('diente26')->nullable();
            $table->string('diente27')->nullable();
            $table->string('diente28')->nullable();
            $table->string('diente29')->nullable();
            $table->string('diente30')->nullable();
            $table->string('diente31')->nullable();
            $table->string('diente32')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('odontogramas');
    }
}
