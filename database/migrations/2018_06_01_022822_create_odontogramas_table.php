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
            $table->string('diente1');
            $table->string('diente2');
            $table->string('diente3');
            $table->string('diente4');
            $table->string('diente5');
            $table->string('diente6');
            $table->string('diente7');
            $table->string('diente8');
            $table->string('diente9');
            $table->string('diente10');
            $table->string('diente11');
            $table->string('diente12');
            $table->string('diente13');
            $table->string('diente14');
            $table->string('diente15');
            $table->string('diente16');
            $table->string('diente17');
            $table->string('diente18');
            $table->string('diente19');
            $table->string('diente20');
            $table->string('diente21');
            $table->string('diente22');
            $table->string('diente23');
            $table->string('diente24');
            $table->string('diente25');
            $table->string('diente26');
            $table->string('diente27');
            $table->string('diente28');
            $table->string('diente29');
            $table->string('diente30');
            $table->string('diente31');
            $table->string('diente32');
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
