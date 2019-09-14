<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\About;
use App\Service;
use App\Team;
use App\Contact;
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

    // Service
    public function service(){
        $result = Service::all();
        // dd($result);
        return view('admin.service.index',compact($result, 'result'));
    }
    public function createService(){
        return view('admin.service.create');
    }
    public function saveService(Request $request){
        Service::insert([
            'judul' => $request->judul,
            'isi' => $request->isi
        ]);
        return redirect(url('admin/service'));
    }
    public function editService($id){
        $result = Service::find($id);
        return view('admin.service.edit',compact('result'));
    }
     public function updateService($id,Request $request){
        Service::where('id',$id)->update([   
            'ser1' => $request->ser1,
            'ser2' => $request->ser2,
            'ser3' => $request->ser3,
            'ser4' => $request->ser4
        ]);
        return redirect(url('admin/service'));
    }
    public function deleteService($id){
        Service::where('id',$id)->delete();
        return redirect(url('admin/service'));
    }

     // Contact
    public function contact(){
        $result = Contact::all();
        // dd($result);
        return view('admin.contact.index',compact($result, 'result'));
    }
    public function createContact(){
        return view('admin.contact.create');
    }
    public function saveContact(Request $request){
        Service::insert([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            
        ]);
        return redirect(url('admin/service'));
    }
    
}
