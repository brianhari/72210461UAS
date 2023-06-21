<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tbl_72210461 extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function process(Request $request)
    {
        $text = $request->input('sisteminformasi');
        $text = $request->input('teknikinformatika');
        $text = $request->input('kedokteran');
        return $text;
    }

    public function tampil()
    {
        
    }
}
