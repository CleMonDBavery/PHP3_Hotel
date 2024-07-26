<?php

namespace Database\Seeders;

use App\Models\AdminCategory;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //crawl data Laravel
        Product::create(
            [
                'name' => 'Laptop Dell XPS',
                'price' => 30000000,
                'description' => "Lorem ",
                'category_id' =>
                    AdminCategory::where('name',
                        'laptop')->first()->id
            ]
        );
    }
}
