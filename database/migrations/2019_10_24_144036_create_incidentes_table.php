<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncidentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidentes', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->unsignedBigInteger('id_serv');
            $table->foreign('id_serv')->references('id')->on('servicios');
            $table->unsignedBigInteger('id_responsable');
            $table->foreign('id_responsable')->references('id')->on('users');
            $table->string('accion_correc');
            $table->string('observacion');
            $table->string('metodo_notif');
            $table->string('reportador');
            $table->string('status');
            $table->timestamp('fecha_reporte')->nullable();
            $table->timestamp('fecha_incidente')->nullable();
            $table->timestamp('fecha_registro')->nullable();
            $table->timestamp('fecha_sol')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incidentes');
    }
}
