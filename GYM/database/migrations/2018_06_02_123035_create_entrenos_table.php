<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrenosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrenos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_modalidad')->unsigned();
            $table->string('repeticiones');
            $table->integer('serie');
            $table->integer('nivel');
            $table->string('peso');
            $table->foreign('id_modalidad')->references('id')->on('modalidads')->onDelete('cascade');
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
        Schema::dropIfExists('entrenos');
    }
}
