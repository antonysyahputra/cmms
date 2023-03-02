<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Department;

class RoomController extends Controller
{
    public function index()
    {
        return view('rooms/index', [
            'title' => 'Room',
            'rooms' => Room::latest()->paginate(10),
            'departments' => Department::all(),
        ]);
    }

    public function create()
    {
        return view('rooms/create', [
            'title' => 'Room Form',
            'departments' => Department::all(),
        ]);
    }

    public function store(Request $request)
    {
        $formRooms = $request->validate([
            'department_id' => 'required',
            'floor' => 'required',
            'name' => 'required|unique:rooms',
        ]);

        Room::create($formRooms);
        return redirect('/rooms');
    }
}
