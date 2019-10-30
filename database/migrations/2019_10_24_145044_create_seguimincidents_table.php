<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeguimincidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimincidents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_incident');
            $table->string('id_responsable');
            $table->string('id_userlog');
            $table->string('status');
            $table->string('observacion');
            $table->timestamp('fecha_seg');
            $table->timestamp('fecha_reg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seguimincidents');
    }
}
