<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function form()
    {
        return view('form');
    }
    public function proses(Request $request)
    {
        $text = $request->input('text');
        return $text;
    }
}
