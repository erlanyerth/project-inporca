<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonitoreosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitoreos', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->unsignedBigInteger('id_serv');
            $table->foreign('id_serv')->references('id')->on('servicios');
            $table->unsignedBigInteger('id_responsable');
            $table->foreign('id_responsable')->references('id')->on('users');
            $table->dateTime('fecha_monit');
            $table->dateTime('fecha_reg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monitoreos');
    }
}
