<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\image;
use App\Models\roomtype;
use App\Models\service;
use App\Models\convenient;


class RoomController extends Controller
{
    public function getRooms()
    {
        $rooms = RoomType::get();
        return view('client.room', ['rooms' => $rooms]);
    }

    public function getRoomDetail($id)
    {
        $room = RoomType::findOrFail($id);
        $services = Service::get();
        $convenients = Convenient::get();

        return view('client.room_detail', [
            'room' => $room,
            'services' => $services,
            'convenients' => $convenients
        ]);
    }
}
