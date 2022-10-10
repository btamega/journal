<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $article=new \App\Models\Articles;
        $article->id_fascicule="16";
        $article->Titre="The Social Sciences between Importation and Reappropriation: Anthropology and other Disciplines, (en.)";
        $article->Nbre_Page="439-450";
        $article->Lien_Telechargement="2020/fascicule-4/20.pdf";
        $article->Date_Publication="16 Novembre 2020";
        $article->save();
    }
}
