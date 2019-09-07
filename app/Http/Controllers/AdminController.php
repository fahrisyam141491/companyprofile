<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\About;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	return view('admin.index');
    }

    //berita
    public function berita()
    {
    	$result = Berita::all();
    	return view('admin.berita.index',compact('result'));
    }

    public function createBerita()
    {
    	return view('admin.berita.create');
    }

    public function saveBerita(Request $request)
    {
    	Berita::insert([	
    		'judul' => $request->judul,
    		'isi' => $request->isi,
    		'created_by' => Auth::user()->id
    	]);
    	return redirect(url('admin/berita'));
    }

    public function editBerita($id)
    {
    	$result = Berita::find($id);
    	return view('admin.berita.edit',compact('result'));
    }

     public function updateBerita($id,Request $request)
     {
    	Berita::where('id',$id)->update([	
    		'judul' => $request->judul,
    		'isi' => $request->isi,
    		'created_by' => Auth::user()->id
    	]);
    	return redirect(url('admin/berita'));
    }

    public function deleteBerita($id)
    {
    	Berita::where('id',$id)->delete();
    	return redirect(url('admin/berita'));
    }

    //about
    public function about()
    {
    	$result = About::all();
    	return view('admin.about.index',compact('result'));
    }

    public function createAbout()
    {
    	return view('admin.about.create');
    }

    public function saveAbout(Request $request)
    {
    	About::insert([	
    		'judul' => $request->judul,
    		'isi' => $request->isi,
    		'created_by' => Auth::user()->id
    	]);
    	return redirect(url('admin/about'));
    }

    public function editAbout($id)
    {
    	$result = About::find($id);
    	return view('admin.about.edit',compact('result'));
    }

     public function updateAbout($id,Request $request)
     {
    	About::where('id',$id)->update([	
    		'judul' => $request->judul,
    		'isi' => $request->isi,
    		'created_by' => Auth::user()->id
    	]);
    	return redirect(url('admin/about'));
    }

    public function deleteAbout($id)
    {
    	About::where('id',$id)->delete();
    	return redirect(url('admin/about'));
    }
}
