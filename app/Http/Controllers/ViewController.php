<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        $data = ['a', 'b', 'c'];  // Dữ liệu cần truyền
        return view('angular', compact('data'));  // Truyền dữ liệu vào view
    }

}
