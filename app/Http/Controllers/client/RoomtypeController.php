<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\roomtype;

class RoomtypeController extends Controller
{
    public function list()
    {
        $roomTypes = roomtype::all();

        return view('client.room', ['roomTypes' => $roomTypes]);
    }

    public function detail($id)
    {
        $roomType = RoomType::findOrFail($id);
        return view('client.room-detail', ['roomType' => $roomType]);
    }

}
