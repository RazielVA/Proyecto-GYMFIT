<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRutinaSemanalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutina_semanals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario')->unsigned();
            $table->string('nombre');
            $table->json('lunes');
            $table->json('martes');
            $table->json('miercoles');
            $table->json('jueves');
            $table->json('viernes');
            $table->json('sabado');
            $table->json('domingo');
            $table->string('repeticiones');
            $table->integer('serie');
            $table->string('peso');
            $table->string('nivel');
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('rutina_semanals');
    }
}
