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
        Schema::create('new__editers', function (Blueprint $table) {
            $table->bigIncrements('id_editer');
            $table->timestamps();
            $table->foreignId('id_articles')->references('id_articles')->on('new_articles');
            $table->foreignId('id_auteur')->references('id_auteur')->on('auteurs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new__editers');
    }
};
