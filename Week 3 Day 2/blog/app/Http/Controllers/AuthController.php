<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function welcome(Request $request)
    {
        $data = [
            'namadepan' => $request["fname"],
            'namabelakang' => $request["lname"]
        ];

        return view('halo', ['data' => $data]);
    }
}
