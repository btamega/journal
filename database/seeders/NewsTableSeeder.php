<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $event=new \App\Models\News;
        $event->Titre="Event 3";
        $event->Description="Troisième test";
        $event->Image="images\hesperis-about.jpeg";
        $event->Date="15-12-2021";
        $event->save();
    }
}
