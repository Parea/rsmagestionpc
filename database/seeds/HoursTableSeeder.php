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
            'start_and_end_at'=>"8h00/9h00",
        ]);

        DB::table('hours')->insert([
            'start_and_end_at'=>"9h00/10h00",
        ]);

        DB::table('hours')->insert([
            'start_and_end_at'=>"10h00/11h00",
        ]);

        DB::table('hours')->insert([
            'start_and_end_at'=>"11h00/12h00",
        ]);

        DB::table('hours')->insert([
            'start_and_end_at'=>"13h00/14h00",
        ]);

        DB::table('hours')->insert([
            'start_and_end_at'=>"14h00/15h00",
        ]);

        DB::table('hours')->insert([
            'start_and_end_at'=>"15h00/16h00",
        ]);

        DB::table('hours')->insert([
            'start_and_end_at'=>"16h00/17h00",
        ]);
    }
}
