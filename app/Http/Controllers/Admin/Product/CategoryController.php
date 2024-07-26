<?php


namespace App\Http\Controllers\Admin\Product;


use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', 1)
            ->orderBy('id', 'desc')
            ->get();

        $products = Product::all();

        return view('welcome', [
            'categoriesView' => $categories,
            'products' => $products,
        ]);
    }

    public function products($id)
    {
        $categoryid = Category::where('categoryId', $id)->first();
        $productId = Product::where('category_id', $id)->get();

        return view('welcome', [
                'products' => $productId
            ]

        );
    }
}
