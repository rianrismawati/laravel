<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Campaign;

class rinbisaController extends Controller
{
   //user
    public function user(){
    	$lat = User::all();

 		return view('rinbisa/user', ['user' => $lat ]);
    }
    public function viewcreate(){
        return view('rinbisa/create_camp');
    }
    public function createC(Request $request){
        $camp = new Campaign;
//        $camp->id = $request->id;
        $camp->judul = $request->judul;
        $camp->target_don = $request->target;
        $camp->deadline = $request->deadline;
        {{ rinbisa.createC::select('kat', ['Jawa Barat', 'Jawa Timur', 'Bali']); }}
        $camp->category = $request->kat;
        $camp->lokasi = $request->id;
        $camp->save();
        
        return redirect('/home');
    }
    
    public function viewedit($id){
        $upd = User::find($id);
        return view('rinbisa/update_p', ['edit' => $upd]);
    }
    public function vieweditfp($id){
        return view('rinbisa/editfp');
    }
    public function editfp(Request $request, $id){
        $upd     = User::find($id);
        
        $fileName = time() . '.' . $request->file('fp')->getClientOriginalExtension();
        $request->file('fp')->storeAs('public/rinbisa', $fileName);
        
        $upd->foto_p = $fileName;
        $upd->save();
        
        return redirect('/home');
    }
    public function editdata(Request $request, $id){
        $update = User::find($id);
        $update->name = $request->nl;
        $update->email = $request->email;
        $update->no_tlp = $request->nt;
        $update->lokasi = $request->lokasi;
        $update->bio = $request->bio;
        $update->save();
        
        return redirect('/home');
    }
    
    //adm
     public function dash_adm(){
        return view('rinbisa/home_adm');
    }
}
