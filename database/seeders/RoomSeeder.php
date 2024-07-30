<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rooms')->insert([
            ['title' => 'Room 101', 'description' => 'Description for Room 101', 'room_number' => 101, 'is_public' => 1, 'status' => 1, 'image_id' => 1, 'room_type_id' => 1, 'service_id' => 1, 'user_id' => 1,],
            ['title' => 'Room 102', 'description' => 'Description for Room 102', 'room_number' => 102, 'is_public' => 1, 'status' => 1, 'image_id' => 2, 'room_type_id' => 2, 'service_id' => 2, 'user_id' => 2,],
            ['title' => 'Room 103', 'description' => 'Description for Room 103', 'room_number' => 103, 'is_public' => 1, 'status' => 1, 'image_id' => 3, 'room_type_id' => 3, 'service_id' => 3, 'user_id' => 3,],
        ]);
    }
}
