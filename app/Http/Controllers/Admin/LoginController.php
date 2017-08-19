<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function getlogin(){

    	return view('admin/login/login');
    }
    public function postLogin(Request $request){

    	
    }
}
