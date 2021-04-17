<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
	public function indexFormAddDetailService() {
		return view('_adminView.add_service');
	}
    //
}
