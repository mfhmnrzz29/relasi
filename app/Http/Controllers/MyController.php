<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrangTua;

class MyController extends Controller
{
    //
    public function index(){
    	$a = "M Fahmi Nur Aziz";
    	return "Nama saya adalah <b>".$a."</b>";
    }

    public function tampilan(){
    	return view('about');
    }

    public function tampilmodel(){
    	$ortu = OrangTua::all();
    	return view('about', compact('ortu'));
    }
}
