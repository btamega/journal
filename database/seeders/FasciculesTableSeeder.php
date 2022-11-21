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
        $fascicule->id_volume="2";
        $fascicule->Nom="fascicule";
        $fascicule->Année="2022";
        $fascicule->Numero="1";
        $fascicule->save();
    }
}
