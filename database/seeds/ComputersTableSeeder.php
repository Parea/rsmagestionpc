<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComputersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('computers')->insert([
            'number' => "PC01",
            'details' => "I5, 8Go de ram, 1 To de stockage, Win10 professionnel",
            'availability' => 0,
        ]);

        DB::table('computers')->insert([
            'number' => "PC02",
            'details' => "I5, 8Go de ram, 1 To de stockage, Win10 professionnel",
            'availability' => 0,
        ]);

        DB::table('computers')->insert([
            'number' => "PC03",
            'details' => "I5, 8Go de ram, 1 To de stockage, Win10 professionnel",
            'availability' => 0,
        ]);

        DB::table('computers')->insert([
            'number' => "PC04",
            'details' => "I5, 8Go de ram, 1 To de stockage, Win10 professionnel",
            'availability' => 0,
        ]);

        DB::table('computers')->insert([
            'number' => "PC05",
            'details' => "I5, 8Go de ram, 1 To de stockage, Win10 professionnel",
            'availability' => 0,
        ]);
    }
}
