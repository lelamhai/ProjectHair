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
		return view('_adminView.index')->with('services', $services);
	}

	public function showAllStepOfService($id, Request $request) {
		$steps = DB::table('service__details')->where('idService', $id)->get();
		$services = DB::table('services')->get();
		$service = DB::table('services')->where('id', $id)->first();
		$request->session()->put('idService', $id);
		return view('_adminView.show_detail_service')->with(['steps'=> $steps,
															'services'=> $services,
															'service' => $service]);
	}

	public function postDetailService(Request $request) {
		$this->validator($request->all())->validate();
		$this->createDetailService($request->all());
		return redirect('admin/index');
	}

	public function editDetailService(Request $request) { //
		$this->validator($request->all())->validate();
		$this->updateDetailService($request->all());
		return redirect('admin/index');
	}

	protected function validator(array $data)
    {
        return Validator::make($data, [
        	'step' => ['required', 'string'],
            'title' => ['required', 'string'],
            'thumbnail' => ['required', 'string'],
            'content' => ['required'],
        ]);
    }

    protected function createDetailService(array $data)
    {
        return Service_Details::create([
        	'step' => $data['step'],
            'title' => $data['title'],
            'thumbnail' => $data['thumbnail'],
            'content' => $data['content'],
            'idService' => $data['idService'],
        ]);
    }

    protected function updateDetailService(array $data)
    {
    	return Service_Details::where('id', $data['id'])->update(array('step' => $data['step'],
            'title' => $data['title'],
            'thumbnail' => $data['thumbnail'],
            'content' => $data['content'],
            'idService' => $data['idService']));
    }

    public function showStepOfServiceToEdit($id, Request $request) {
    	$step = DB::table('service__details')->where('id', $id)->first();
    	$services = DB::table('services')->get();
		$p = $request->session()->get('idService');
    	return view('_adminView.edit_step')->with(['services'=> $services,
													'idService' => $p,
													'step' => $step]);
    }

    public function deleteStep($id) {
    	return Service_Details::where('id', $id)->delete();
    }
    //
}
