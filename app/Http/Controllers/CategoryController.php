<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories/index', [
            "title" => "Categories",
            "categories" => Category::latest()->paginate(3)
        ]);
    }

    public function create()
    {
        return view('categories/create', [
            "title" => "Categories Form",
        ]);
    }

    public function store(Request $request)
    {
        $formCategories = $request->validate([
            'name' => 'required',
            'code' => 'required'
        ]);
        // dd($formFields);
        Category::create($formCategories);

        return redirect('/categories');
    }
}
