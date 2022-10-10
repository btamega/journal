<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VolumesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $volume=new \App\Models\Volumes;
        $volume->Titre="Hespéris-Tamuda Vol. 56";
        $volume->Année="2021";
        $volume->save();
    }
}
