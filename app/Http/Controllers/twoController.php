<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Two;

class twoController extends Controller
{
    public function index()
    {
    	 $blog = Two::all();
    	 // dd($blog);
    	 return view('two/home', ['one' => $blog] );
    }

    public function show($id)
    {
    	 $nilai = 'Ini adalah nilainya ' . $id;
    	 // array
    	 // $user = ['yusuf', 'fajar', 'andri'];
    	 // like
    	 // $user = DB::table('users')->where('username', 'like', '%i%')->get();
    	 // insert
    	 // DB::table('users')->insert([
    	 // 	['username'=>'rona', 'password'=>'kgnrin!']
    	 // ]);
    	 // DB::table('users')->where('password', '456')
    	 // 					->update(['password'=>'111213']
    	 // );
    	 DB::table('users')->where('username', '=', 'mardi')->delete();
    	  $user = DB::table('users')->get();
     	 // dd($user);
    	 return view('two\single', ['two' => $nilai, 'user' => $user] );
    }
}
