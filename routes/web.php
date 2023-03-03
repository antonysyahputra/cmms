<?php

use \App\Models\Asset;
use \App\Models\Product;
use \App\Models\Inventory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\RoomController;

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

Route::get('/dashboard', function () {
    return view('/dashboard/index', [
        'title' => 'Dashboard'
    ]);
});

// Inventory
Route::get('/inventories', [InventoryController::class, 'index'])->name('inventories');
Route::get('/inventories/create', [InventoryController::class, 'create']);
Route::post('/inventories', [InventoryController::class, 'store']);
Route::get('/inventories/{id}', function ($id) {
    return Inventory::find($id);
});

// Product
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'store']);

// Category

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/create', [CategoryController::class, 'create']);
Route::post('/categories', [CategoryController::class, 'store']);

// Department
Route::get('/departments', function () {
    return view('departments/index');
})->name('departments');

// Room
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms');
Route::get('/rooms/create', [RoomController::class, 'create']);
Route::post('/rooms', [RoomController::class, 'store']);

// Documentation
Route::get('/documentation', function () {
    return view('documentation', [
        'title' => 'Documentation',
    ]);
})->name('documentation');









Route::get('/sidebar', function () {
    return view('sidebartest');
});

Route::get('/blank', function () {
    return view('blank-page');
});
