<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssignmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assignments')->insert([
            'client_id' => 3,
            'computer_id' => 1,
            'hour_id' => 1,
        ]);

        DB::table('assignments')->insert([
            'client_id' => 1,
            'computer_id' => 2,
            'hour_id' => 2,
        ]);

        DB::table('assignments')->insert([
            'client_id' => 2,
            'computer_id' => 3,
            'hour_id' => 1,
        ]);
    }
}
