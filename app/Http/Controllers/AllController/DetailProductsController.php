<?php

namespace App\Http\Controllers\AllController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailProductsController extends Controller
{
	public function index() {
		return view('allView.detail_product');
	}
    //
}
