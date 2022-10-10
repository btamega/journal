<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin=new \App\Models\Admin;
        $admin->adminName="TAMEGA";
        $admin->adminPassword="1234567";
        $admin->adminSpecialite="Informaticien";
        $admin->save();


    }
}
