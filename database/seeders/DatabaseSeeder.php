<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ImageSeeder::class,
            ConvenientSeeder::class,
            ServiceSeeder::class,
            UserSeeder::class,
            BookingSeeder::class,
            BlogSeeder::class,
            CommentSeeder::class,
            RoomSeeder::class,
            RoomtypeSeeder::class,

        ]);
    }
}
