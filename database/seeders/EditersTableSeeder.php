<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EditersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $editers=new \App\Models\Editer;
        $editers->id_articles="109";
        $editers->id_auteur="188";
        $editers->save();
    }
}
