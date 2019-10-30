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
            $table->increments('id');
            $table->string('id_serv');
            $table->string('id_responsable');
            $table->string('id_userlog');
            $table->string('accion_correc');
            $table->string('observacion');
            $table->string('metodo_notif');
            $table->string('reportador');
            $table->string('status');
            $table->timestamp('fecha_reporte');
            $table->timestamp('fecha_incidente');
            $table->timestamp('fecha_registro');
            $table->timestamp('fecha_sol');
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
