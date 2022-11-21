<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FasciculesSommaire extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //
       $SomFascicule=new \App\Models\FasciculeSommaire;
       $SomFascicule->id_fascicule="4";
       $SomFascicule->id_sommaire="1";
       $SomFascicule->save();
    }
}
