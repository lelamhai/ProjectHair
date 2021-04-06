<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class RegisterController extends Controller
{
	public function getAuthRegister() {
		return view('auth_.register');
	}
    
    public function posttAuthRegister() {
		
	}
    //
}
