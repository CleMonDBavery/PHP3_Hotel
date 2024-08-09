<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->insert([
            ['title' => 'First Blog Post', 'content' => 'Content of first blog post', 'is_public' => 1, 'image_id' => 1, 'user_id' => 1],
            ['title' => 'Second Blog Post', 'content' => 'Content of second blog post', 'is_public' => 1, 'image_id' => 2, 'user_id' => 2],
            ['title' => 'Third Blog Post', 'content' => 'Content of third blog post', 'is_public' => 1, 'image_id' => 3, 'user_id' => 3],
        ]);
    }
}
