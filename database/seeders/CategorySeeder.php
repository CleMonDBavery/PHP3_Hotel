<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(
            [
                'name' => 'Laptop',
                'parent_id' => 1,
                'status' => 1
            ]
        );
    }
    //migrate => dữ liệu mẫu => phát sinh => rollback => sửa bảng
    // => migrate => sửa dữ liệu mẫu => db:seed
}
