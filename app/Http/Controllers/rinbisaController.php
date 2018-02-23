<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
// use App\Models\User;
use App\Models\Campaign;
use App\Models\Kategori_camp;
use App\Models\Penerima_dana;
use App\Models\Donasi;
use Illuminate\Support\Facades\Auth;

class rinbisaController extends Controller
{
   //user
    public function index(){
        $readcamp = Campaign::all();

        return view('rinbisa/index', ['readC' => $readcamp]);
    }

    public function showUser($id){
    	$read = User::find($id);

        return view('/home', ['showUs' => $read]);
    }

    public function viewcamp(){
        $read = Campaign::where('id',Auth::id())->get();

        return view('rinbisa/campaign', ['campU' => $read]);
    }

    public function viewcreate(){
        //LAH INI APAAN? -_-
        $getKat = Kategori_camp::all();
        $getPen = Penerima_dana::all();
        return view('rinbisa/create_camp')->with([
                                            'getKateg' => $getKat,
                                            'getPener' => $getPen
                                                ]);
    }
    public function createC(Request $request){
        $camp = new Campaign;
        //$camp->id = $request->id;
        
        $camp->judul = $request->judul;
        $camp->id = Auth::id();
        $this->validate($request, [
            'foto_camp' => 'mimes:jpeg,jpg,png|max:1000'
        ]);
        
        $fileName = time() . '.' . $request->file('foto_camp')->getClientOriginalExtension();
        $request->file('foto_camp')->storeAs('public/rinbisa/campaign', $fileName);
        
        $camp->foto_camp = $fileName;
        $camp->target_don = $request->target;
        $camp->deadline = $request->deadline;
        $camp->category = $request->kat;
        $camp->lokasi = $request->lok;
        $camp->desk_camp = $request->desk;
        $camp->save();
        
        return redirect()->route('rinbisa.viewcamp');
    }

//ini
    public function viewdet($id){
        $det_camp = Campaign::where('id_camp',$id)->get();

        return view('rinbisa/detail_camp', ['detail' => $det_camp]);
    }

    public function viewdon(){
        $donUs = Donasi::join('campaign','donasi.id_camp','=','campaign.id_camp')
                        ->where('donasi.id', Auth::id())
                        ->get();
        return view('rinbisa/donasi')->with(['donUser' => $donUs]);
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

        $this->validate($request, [
            'fp' => 'mimes:jpeg,jpg,png | max : 1000'
        ]);
        
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

    public function viewproses(){
        // $contri = Campaign::where('id_camp', $id)->get();

        return view('/rinbisa/prosesDon');
    }
    
    //adm
    public function dash_adm(){
        return view('rinbisa/home_adm');
    }

    public function viewdon_a(){
        $readdon = Donasi::join('campaign', 'donasi.id_camp', '=', 'campaign.id_camp')->get();

        return view('rinbisa/admin/donasi', ['don' => $readdon]);
    }

    public function detail_d($id){
        $don = Donasi::join('campaign', 'donasi.id_camp', '=', 'campaign.id_camp')->           join('users', 'donasi.id', '=', 'users.id')
                            ->where('id_don',$id)
                            ->get();

        return view('/rinbisa/admin/detail_don', ['detaildon' => $don]);
    }

    public function update_d(Request $request, $id){
        $donas = Donasi::where('id_don',$id)->first();;
        $donas->status = $request->stat;
        $donas->save();

        return redirect('rinbisa/admin/donasi');
    }

    public function viewcamp_a(){
        $read_c = Campaign::join('users', 'campaign.id', '=', 'users.id')->get();

        return view('rinbisa/admin/campaign', ['readcamp' => $read_c]);
    }

    public function detail_c($id){
        $det = Campaign::where('id_camp',$id)->get();

        return view('/rinbisa/admin/detail_camp', ['detailCamp' => $det]);
    }

    public function viewuser_a(){
        $users = User::all();

        return view('rinbisa/admin/user', ['readuser' => $users]);
    }
}
