<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function index(){
    	return view ('soal/soal');
    }
    public function getNilai(Request $request){
    	$request=>
    	return view ('soal/soal', ['req' => $request]);
    }
}
