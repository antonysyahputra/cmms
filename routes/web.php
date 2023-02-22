<?php

use Illuminate\Support\Facades\Route;
use \App\Models\Asset;
use \App\Models\Inventory;
use \App\Models\Product;
use App\Http\Controllers\ProductController;
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

Route::get('/posts/{id}', function ($id) {
    ddd($id);
    return response('Post '. $id);
});

Route::get('/equipments', function () {
    return view('/equipments/index', [
        "title" => "Equipment Page"
    ]);
});

Route::get('/assets', function () {
    return view('/assets/index', [
        'title' => 'Data Assets',
        'assets' => Asset::all(),
    ]);
})->name('assets');

Route::get('/assets/{id}', function ($id) {
    return Asset::find($id);
});

Route::get('/inventories', [InventoryController::class, 'index'])->name('inventories');

Route::get('/inventories/{id}', function ($id) {
    return Inventory::find($id);
});

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/create', [ProductController::class, 'create']);

Route::get('/sidebar', function () {
    return view('sidebartest');
});

Route::get('/blank', function () {
    return view('blank-page');
});
