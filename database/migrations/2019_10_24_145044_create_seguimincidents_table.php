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
            $table->bigincrements('id');
            $table->unsignedBigInteger('id_incident');
            $table->foreign('id_incident')->references('id')->on('incidentes');
            $table->unsignedBigInteger('id_responsable');
            $table->foreign('id_responsable')->references('id')->on('users');
            $table->string('status');
            $table->mediumText('observacion');
            $table->timestamp('fecha_seg')->nullable();
            $table->timestamps();
            //$table->timestamp('fecha_reg')->nullable();
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
