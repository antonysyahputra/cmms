<?php

namespace App\Http\Controllers;
use App\Models\Product;

use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // dd(request()->category);
        return view('products/index', [
            'title' => "Data Product",
            'products' => Product::latest()->filter(request(['category']))->paginate(5),
            'categories' => Category::all()
       ]);
    }

    // public function show()
    // {
    //     return view('')
    // }

    public function create()
    {
        return view('products/create', [
            'title' => 'Form Product'
        ]);
    }
}