<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
       
        DB::table('new__editers')->insert([
            'id_articles' => 4,
            'id_auteur' => 1,
            
        ]);
    }
}
