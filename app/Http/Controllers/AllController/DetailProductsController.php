<?php

namespace App\Http\Controllers\AllController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailProductsController extends Controller
{
	public function index() {
		return view('_allView.detail_product');
	}
    //
}
