<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function danhnhapAdmin(){
    	return view ('admin.login');
    }
}
