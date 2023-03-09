<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Floor;
use App\Models\Product;
use App\Models\Category;
use App\Models\Inventory;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class InventoryController extends Controller
{
    public function index()
    {
        return view('inventories/index', [
            'title' => 'Inventories',
            'inventories' => Inventory::latest()->paginate(5),
            'departments' => Department::all(),
            'categories' => Category::all(),
            'floors' => Floor::all(),
            'rooms' => Room::latest()->get(),
            'products' => Product::latest()->get(),
        ]);
    }

    public function show($id) {
        return view('inventories/show', [
            'title' => 'Detail Inventory',
            'inventory' => Inventory::find($id),
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
        
        
        $formInventory = $request->validate([
            'product_id' => 'required',
            'room_id' => 'required',
            'purchased_in' => 'required',
        ]);
        $product = Product::find($request->product_id);
        $room = Room::find($request->room_id);
        $departmentId = $room->department->id;
        $purchased_in = substr($request->purchased_in, -8, 2);
        $lastSerialNumber = Inventory::whereHas('room', function (Builder $query) use ($departmentId) {
            $query->where('department_id', 'like', $departmentId);
        })
        ->where('product_id', $product->id)->latest()->first();


        $serialNumber = $lastSerialNumber == null ? 0 : (int)$lastSerialNumber->serial_number;

        $newSerialNumber = $serialNumber + 1;

            $formInventory['code_inventory'] = $product->code . '-' . $purchased_in . '-' . $room->name. '-' . $newSerialNumber;
            $formInventory['serial_number'] = $newSerialNumber;

        Inventory::create($formInventory);

        return redirect('/inventories');
    }

    public function getproduct($product) {
        dd($product);
    }
}
