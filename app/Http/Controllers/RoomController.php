<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        return view('room.index');
    }

    public function show()
    {
        return view('room.show');
    }
}
