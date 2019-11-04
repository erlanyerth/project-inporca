<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreaafectadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areaafectadas', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->unsignedBigInteger('id_incident');
            $table->foreign('id_incident')->references('id')->on('users');
            $table->unsignedBigInteger('id_area');
            $table->foreign('id_area')->references('id')->on('users');
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
        Schema::dropIfExists('areaafectadas');
    }
}
