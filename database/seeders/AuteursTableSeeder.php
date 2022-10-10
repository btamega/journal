<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AuteursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $auteur=new \App\Models\Auteur;
        $auteur->Nom="Oumlil (Ichrāf wa taqdīm)";
        $auteur->Prenom="Ali";
        $auteur->save();
    }
}
