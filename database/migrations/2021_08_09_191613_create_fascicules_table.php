<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFasciculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fascicules', function (Blueprint $table) {
            $table->bigIncrements('id_fascicule');
            $table->timestamps();
            $table->foreignId('id_volume')->references('id_volume')->on('volumes');;
            $table->String('Nom');
            $table->String('Année');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fascicules');
    }
}
