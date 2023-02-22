<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Floor;
use App\Models\Inventory;
use App\Models\Department;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        return view('inventories/index', [
            'title' => 'Data inventories',
            'inventories' => Inventory::all(),
            'departments' => Department::all(),
            'floors' => Floor::all(),
            'rooms' => Room::all(),
        ]);
    }
}
