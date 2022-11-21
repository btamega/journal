<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SommairesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sommaire=new \App\Models\Sommaires;
        $sommaire->Titre="Article-Articulos";
        $sommaire->save();
    }
}
