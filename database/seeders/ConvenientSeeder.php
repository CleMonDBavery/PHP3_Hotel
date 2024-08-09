<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConvenientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('convenients')->insert([
            ['name' => 'Free Wi-Fi', 'image_id' => 1],
            ['name' => 'Breakfast Included', 'image_id' => 2],
            ['name' => 'Swimming Pool', 'image_id' => 3],
        ]);
    }
}
