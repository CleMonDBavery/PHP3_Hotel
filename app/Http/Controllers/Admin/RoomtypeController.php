<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\roomtype;
use App\Models\image;

class RoomtypeController extends Controller
{
    public function read()
    {

        $roomtypes = RoomType::with('image')->get();
        return view('admin.hotel', ['roomtypes' => $roomtypes]);
    }
}
