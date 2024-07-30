<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->insert([
            ['content' => 'This is the first comment', 'user_id' => 1],
            ['content' => 'This is the second comment', 'user_id' => 2],
            ['content' => 'This is the third comment', 'user_id' => 3],
            ['content' => 'This is the first2 comment', 'user_id' => 1],
            ['content' => 'This is the second2 comment', 'user_id' => 2],
            ['content' => 'This is the third2 comment', 'user_id' => 3],
        ]);
    }
}
