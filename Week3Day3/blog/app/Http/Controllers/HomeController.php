<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('konten.index');
    }

    public function dataTable()
    {
        return view('konten.dataTable');
    }
}
