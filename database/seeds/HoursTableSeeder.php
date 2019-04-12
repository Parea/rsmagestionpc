<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hours')->insert([
            'start_at'=>"8h00",
            'end_at' =>"12h00",
        ]);

        DB::table('hours')->insert([
            'start_at'=>"13h00",
            'end_at' =>"17h00",
        ]);
    }
}
