<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('nombre');
            $table->string('status');
            $table->timestamps();
        });
        Schema::create('servicios', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('nombre');
            $table->unsignedBigInteger('idcateg');
            $table->foreign('idcateg')->references('id')->on('categorias');
            $table->string('statusact');
            $table->string('statuscomport');
            $table->string('frecuencia');
            $table->time('dispon_desde');
            $table->time('dispon_hasta');
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
        Schema::dropIfExists('servicios');
        Schema::dropIfExists('categorias');
    }
}
