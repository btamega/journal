<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fascicule_sommaires', function (Blueprint $table) {
            $table->bigIncrements('id_fascicule_sommaire');
            $table->foreignId('id_fascicule')->references('id_fascicule')->on('fascicules');
            $table->foreignId('id_sommaire')->references('id_sommaire')->on('sommaires');
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
        Schema::dropIfExists('fascicule_sommaires');
    }
};
