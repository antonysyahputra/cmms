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
            'rooms' => Room::latest()->get(),
            'products' => Product::latest()->get(),
        ]);
    }

    public function create()
    {
        // dd(Product::all()->last());
        return view('inventories/create', [
            'title' => 'Inventory',
            'products' => Product::all(),
            'rooms' => Room::all(),
        ]);
    }

    public function store(Request $request) {
        dd(request('product_id'));
        $formInventory = $request->validate([
            'product_id' => 'required',
            'room_id' => 'required',
            'purchased_in' => 'required',
            'code_inventory' => 'required|unique:inventories'
        ]);

        // dd($formInventory);
        Inventory::create($formInventory);

        return redirect('/inventories');
    }
}
