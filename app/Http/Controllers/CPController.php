<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CPController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
