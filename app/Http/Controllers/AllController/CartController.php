<?php

namespace App\Http\Controllers\AllController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
	public function index() {
		return view('allView.cart');
	}
    //
}
