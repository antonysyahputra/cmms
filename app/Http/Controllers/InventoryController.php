<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Floor;
use App\Models\Inventory;
use App\Models\Department;
use App\Models\Product;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        return view('inventories/index', [
            'title' => 'Data inventories',
            'inventories' => Inventory::latest()->paginate(5),
            'departments' => Department::all(),
            'floors' => Floor::all(),
            'rooms' => Room::all(),
            'products' => Product::latest()->get(),
        ]);
    }

    public function create()
    {
        return view('inventories/create', [
            'title' => 'Inventory',
        ]);
    }
}
