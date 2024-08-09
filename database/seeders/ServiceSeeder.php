<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            ['name' => 'Room Service', 'price' => 20.0, 'image_id' => 1],
            ['name' => 'Laundry', 'price' => 15.0, 'image_id' => 2],
            ['name' => 'Spa', 'price' => 50.0, 'image_id' => 3],
        ]);
    }
}
