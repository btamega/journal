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
        Schema::create('new_articles', function (Blueprint $table) {
            $table->bigIncrements('id_articles');
            $table->timestamps();            
            $table->foreignId('id_fascicule')->references('id_fascicule')->on('fascicules');
            $table->foreignId('id_sommaire')->references('id_sommaire')->on('sommaires');
            $table->string('Titre');
            $table->string('Nbre_Page');
            $table->string('Lien_Telechargement');
            $table->string('Date_Publication');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_articles');
    }
};
