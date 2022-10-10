<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FasciculesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $fascicule=new \App\Models\Fascicules;
        $fascicule->id_volume="12";
        $fascicule->Nom="fascicule";
        $fascicule->Année="2021";
        $fascicule->numero="1";
        $fascicule->save();
    }
}
