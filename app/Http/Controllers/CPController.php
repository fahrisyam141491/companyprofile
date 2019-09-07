<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class CPController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function save(Request $request)
    {
    	Contact::insert([	
    		'name' => $request->name,
    		'email' => $request->email,
    		'message' => $request->message
    	]);
    	return redirect(url('/'));
    }
}
