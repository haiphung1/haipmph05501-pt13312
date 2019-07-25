<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;
class ClassRoomController extends Controller
{
    //
    public function index()
    {
        # code...
        $classes = ClassRoom::all();
        return view('admin.class', compact('classes'));
    }
}
