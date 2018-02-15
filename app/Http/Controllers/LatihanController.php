<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Latihan;

class LatihanController extends Controller
{
    public function index(){
    	$lat = Latihan::all();

 		return view('latihan/index', ['latih' => $lat ]);
    }

    public function viewcreate(){
    	return view('latihan/create');
    }

    public function create(Request $request){
    	
    	$this->validate($request, [
    		'nama' => 'required|min:3',
    		'alamat' => 'required|max:25' 
    	]);
    	$latihan = new Latihan;
    	$latihan->nama = $request->nama;
    	$latihan->umur = $request->umur;
    	$latihan->alamat = $request->alamat;
    	$latihan->save();

    	return redirect('latihan');
    }

    public function show($id){
    	$read = Latihan::find($id);

    	return view('latihan/read', ['read' => $read]);
    }

    public function viewedit($id){
    	$upd = Latihan::find($id);
    	return view('latihan/edit', ['edit' => $upd]);
    }

    public function editdata(Request $request, $id){
    	$update = Latihan::find($id);
    	$update->nama = $request->nama;
    	$update->umur = $request->umur;
    	$update->alamat = $request->alamat;
    	$update->save();

    	return redirect('latihan/');
    }


    public function destroy($id){
    	$del = Latihan::find($id);
    	$del->delete();

    	return redirect('latihan');
    }
}
