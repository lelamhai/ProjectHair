<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Service_Details;

class ServiceController extends Controller
{
	public function indexFormAddDetailService(Request $request) {
		$services = DB::table('services')->get();
		$p = $request->session()->get('idService');
		return view('_adminView.add_detail_service')->with(['services'=> $services,
													'idService' => $p]);
	}

	public function showAllServie() {
		$services = DB::table('services')->get();
		return view('_adminView.root')->with('services', $services);
	}

	public function showStepOfService($id, Request $request) {
		$steps = DB::table('service__details')->where('idService', $id)->get();
		$services = DB::table('services')->get();
		$request->session()->put('idService', $id);
		return view('_adminView.show_detail_service')->with(['steps'=> $steps,
															'services'=> $services]);
	}

	public function postDetailService(Request $request) {
		$this->validator($request->all())->validate();
		$this->createDetailService($request->all());
		return redirect('admin/root');
	}

	protected function validator(array $data)
    {
        return Validator::make($data, [
        	'step' => ['required', 'string'],
            'nameStep' => ['required', 'string'],
            'image' => ['required', 'string'],
            'content' => ['required'],
        ]);
    }

    protected function createDetailService(array $data)
    {
        return Service_Details::create([
        	'step' => $data['step'],
            'nameStep' => $data['nameStep'],
            'image' => $data['image'],
            'content' => $data['content'],
            'idService' => $data['idService'],
        ]);
    }
    //
}
