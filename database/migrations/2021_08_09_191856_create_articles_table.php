<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id_articles');
            $table->timestamps();
            $table->foreignId('id_fascicule')->references('id_fascicule')->on('fascicules');;
            $table->String('Titre');
            $table->String('Nbre_Page');
            $table->String('Lien_Telechargement');
            $table->String('Date_Publication');
            $table->enum('type', ['article', 'compte_rendu','note_document','varia']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
