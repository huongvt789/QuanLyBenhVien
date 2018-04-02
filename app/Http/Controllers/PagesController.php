<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function trangchu(){
    	return view('frontend.trangchu');
	}
	public function gioithieu(){
   		return view('frontend.gioithieu');
	}
	public function lienhe(){
   		return view('frontend.lienhe');
	}
}
