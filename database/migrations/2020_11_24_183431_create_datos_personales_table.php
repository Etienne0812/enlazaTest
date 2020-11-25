<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosPersonalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_personales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('DNI');
            $table->string('name');
            $table->string('firstSurname');
            $table->string('secondSurname');
            $table->string('phone');
            $table->string('email');

            $table->biginteger('userId')->unsigned(); 
            $table->foreign('userId')->references('id')->on('usuarios'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_personales');
    }
}
