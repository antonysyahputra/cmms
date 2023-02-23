<?php

use \App\Models\Asset;
use \App\Models\Product;
use \App\Models\Inventory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InventoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Latest Listings",
    ]);
})->name('home');

// Inventory
Route::get('/inventories', [InventoryController::class, 'index'])->name('inventories');
Route::get('/inventories/{id}', function ($id) {
    return Inventory::find($id);
});

// Product
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/create', [ProductController::class, 'create']);

// Category

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/create', [CategoryController::class, 'create']);
Route::post('/categories', [CategoryController::class, 'store']);








Route::get('/sidebar', function () {
    return view('sidebartest');
});

Route::get('/blank', function () {
    return view('blank-page');
});
