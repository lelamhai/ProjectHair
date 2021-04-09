<?php

namespace App\Http\Controllers\AllController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModelHotController extends Controller
{
	public function index() {
		return view('_allView.model_hot');
	}
    //
}
