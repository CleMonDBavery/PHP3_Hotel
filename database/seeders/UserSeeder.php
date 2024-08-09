<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('users')->insert([
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'password' => Hash::make('password'),
                'phone' => '123456789',
                'image_id' => 1,
                'is_public' => 1,
                'role' => 0,
                'booking_id' => 1,
                'google_id' => null,

            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'password' => Hash::make('password'),
                'phone' => '987654321',
                'image_id' => 2,
                'is_public' => 1,
                'role' => 1,
                'booking_id' => 2,
                'google_id' => null,

            ],
            [
                'name' => 'Alice Johnson',
                'email' => 'alice@example.com',
                'password' => Hash::make('password'),
                'phone' => '456789123',
                'image_id' => 3,
                'is_public' => 1,
                'role' => 1,
                'booking_id' => 3,
                'google_id' => null,
            ],
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
