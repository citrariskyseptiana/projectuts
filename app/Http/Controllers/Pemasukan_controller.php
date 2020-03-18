<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pemasukan_controller extends Controller
{
    public function index(){
    	$data = \DB::table('pemasukan')->get();

    	return view('pemasukan.pemasukan_index',compact('data'));
    }
}
