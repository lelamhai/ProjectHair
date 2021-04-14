<?php

namespace App\Http\Controllers\AllController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
	public function index() {
		$services = DB::table('services')->get();
		return view('_allView.service')->with('services', $services);
	}

	public function showStepOfService($id) {
		$steps = DB::table('service__details')->where('idService', $id)->get();
		return view('_allView.step')->with('steps', $steps);
	}
    //
}
