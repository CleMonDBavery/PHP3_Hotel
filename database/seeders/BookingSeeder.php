<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('bookings')->insert([
            [
                'booking_date' => now(),
                'check_in_date' => now()->addDays(1),
                'check_out_date' => now()->addDays(2),
                'total_price' => 300,
                'status' => 0,
                'user_id' => 1,  // Ensure this user_id exists in user table
                'room_id' => 1,  // Ensure these IDs exist in their respective tables
                'service_id' => 1,
            ],
            [
                'booking_date' => now(),
                'check_in_date' => now()->addDays(3),
                'check_out_date' => now()->addDays(4),
                'total_price' => 500,
                'status' => 0,
                'user_id' => 2,  // Ensure this user_id exists in user table
                'room_id' => 2,
                'service_id' => 2,
            ],
            [
                'booking_date' => now(),
                'check_in_date' => now()->addDays(5),
                'check_out_date' => now()->addDays(6),
                'total_price' => 700,
                'status' => 0,
                'user_id' => 3,  // Ensure this user_id exists in user table
                'room_id' => 3,
                'service_id' => 3,
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    }
}
