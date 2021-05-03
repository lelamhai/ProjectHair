<?php

namespace App\Http\Controllers\AllController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;

class CartController extends Controller
{
	public function index() {
		$carts = Cart::all();
		return view('_allView.cart')->with('carts', $carts);
	}


    //
}
