<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->insert([
            ['name' => 'image Phòng tiêu chuẩn', 'path' => 'room1.jpg'],
            ['name' => 'image Phòng cao cấp', 'path' => 'room2.jpg'],
            ['name' => 'image Căn hộ sang trọng', 'path' => 'room3.jpg'],
            ['name' => 'image Phòng gia đình', 'path' => 'room4.jpg'],
            ['name' => 'image Phòng View', 'path' => 'room5.jpg'],
            ['name' => 'image SuitePhòng VIP', 'path' => 'room6.jpg'],
        ]);
    }
}
