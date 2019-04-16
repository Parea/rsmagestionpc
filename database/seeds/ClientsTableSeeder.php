<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'lastname' => "TAIE",
            'firstname' => "Boris",
            'number_phone' => "87784570",
        ]);

        DB::table('clients')->insert([
            'lastname' => "CHEBRET",
            'firstname' => "Heilani",
            'number_phone' => "87342662",
        ]);

        DB::table('clients')->insert([
            'lastname' => "TAIE",
            'firstname' => "Marie-laure",
            'number_phone' => "87735306",
        ]);
    }
}
