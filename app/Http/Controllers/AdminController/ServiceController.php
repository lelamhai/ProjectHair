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
		$categories = DB::table('categories')->get();
		$p = $request->session()->get('idService');
		$arrNumberOfProduct = $request->session()->get('arrNumberOfProduct');
		$arrNumberOfService = $request->session()->get('arrNumberOfService');
		$numHot = $request->session()->get('numHot');
		$numBook = $request->session()->get('numBook');
		$arrNumberOfOrder = $request->session()->get('arrNumberOfOrder');
		$arrNumberOfAcc = $request->session()->get('arrNumberOfAcc');
		return view('_adminView.service.add_step')->with(['services'=> $services,
														  'categories' => $categories,
													      'idService' => $p,
												'arrNumberOfProduct' => $arrNumberOfProduct,
												'arrNumberOfService' => $arrNumberOfService,
												'numHot' => $numHot,
												'numBook' => $numBook,
												'arrNumberOfOrder' => $arrNumberOfOrder,
												'arrNumberOfAcc' => $arrNumberOfAcc]);
	}

	public function showMenu(Request $request) {
		$arrNumberOfProduct = [];
		$arrNumberOfService = [];
		$arrNumberOfOrder= [];
		$arrNumberOfAcc= [];

		$services = DB::table('services')->get();
		$categories = DB::table('categories')->get();

		foreach ($categories as $categorie) {
			$listPro = DB::table('products')->where('idCate', $categorie->idCate)->get();
			$num = count($listPro);
			$arrNumberOfProduct[] = $num; 
		}
		foreach ($services as $service) {
			$listSer = DB::table('service__details')->where('idService', $service->id)->get();
			$num = count($listSer);
			$arrNumberOfService[] = $num; 
		}

		$listHot = DB::table('modesl_hair__hots')->get();
		$numHot = count($listHot);

		$listBook = DB::table('books')->where('finish', 0)->get();
		$numBook = count($listBook);

		$listOrder1 = DB::table('orders')->where('status', 'Paid')->get();
		$listOrder2 = DB::table('orders')->where('status', 'Prosecc')->get();
		$arrNumberOfOrder[] = count($listOrder1);
		$arrNumberOfOrder[] = count($listOrder2);

		$listUsmAdmin = DB::table('user')->where('human_rights', 0)->get();
		$listUsmEmp = DB::table('user')->where('human_rights', 1)->get();
		$listUsmUs = DB::table('user')->where('human_rights', 2)->get();
		$arrNumberOfAcc[] = count($listUsmAdmin);
		$arrNumberOfAcc[] = count($listUsmEmp);
		$arrNumberOfAcc[] = count($listUsmUs);

		$request->session()->put('arrNumberOfProduct', $arrNumberOfProduct);
		$request->session()->put('arrNumberOfService', $arrNumberOfService);
		$request->session()->put('numHot', $numHot);
		$request->session()->put('numBook', $numBook);
		$request->session()->put('arrNumberOfOrder', $arrNumberOfOrder);
		$request->session()->put('arrNumberOfAcc', $arrNumberOfAcc);
		return view('_adminView.index')->with(['services' => $services,
												'categories' => $categories,
												'arrNumberOfProduct' => $arrNumberOfProduct,
												'arrNumberOfService' => $arrNumberOfService,
												'numHot' => $numHot,
												'numBook' => $numBook,
												'arrNumberOfOrder' => $arrNumberOfOrder,
												'arrNumberOfAcc' => $arrNumberOfAcc]);
	}

	public function showAllStepOfService($id, Request $request) {
		//$steps = Service_Details::paginate(4)->where('idService', $id);
		$steps = DB::table('service__details')->where('idService', $id)->paginate(8);
		$services = DB::table('services')->get();
		$categories = DB::table('categories')->get();
		$service = DB::table('services')->where('id', $id)->first(); // lấy tên cate 
		$request->session()->put('idService', $id);
		$arrNumberOfProduct = $request->session()->get('arrNumberOfProduct');
		$arrNumberOfService = $request->session()->get('arrNumberOfService');
		$numHot = $request->session()->get('numHot');
		$numBook = $request->session()->get('numBook');
		$arrNumberOfOrder = $request->session()->get('arrNumberOfOrder');
		$arrNumberOfAcc = $request->session()->get('arrNumberOfAcc');
		return view('_adminView.service.show_service')->with(['steps'=> $steps,
															'services'=> $services,
															'categories' => $categories,
															'service' => $service,
												'arrNumberOfProduct' => $arrNumberOfProduct,
												'arrNumberOfService' => $arrNumberOfService,
												'numHot' => $numHot,
												'numBook' => $numBook,
												'arrNumberOfOrder' => $arrNumberOfOrder,
												'arrNumberOfAcc' => $arrNumberOfAcc]);
	}

	public function postDetailService(Request $request) {
		//$this->validator($request->all())->validate();
		$this->createDetailService($request->all());
		$id = $request->session()->get('idService');
		$steps = DB::table('service__details')->where('idService', $id)->paginate(8);
		$services = DB::table('services')->get();
		$categories = DB::table('categories')->get();
		$service = DB::table('services')->where('id', $id)->first(); // lấy tên cate
		$arrNumberOfProduct = $request->session()->get('arrNumberOfProduct');
		$arrNumberOfService = $request->session()->get('arrNumberOfService');
		$numHot = $request->session()->get('numHot');
		$numBook = $request->session()->get('numBook');
		$arrNumberOfOrder = $request->session()->get('arrNumberOfOrder');
		$arrNumberOfAcc = $request->session()->get('arrNumberOfAcc');
		return view('_adminView.service.show_service')->with(['steps'=> $steps,
															'services'=> $services,
															'categories' => $categories,
															'service' => $service,
												'arrNumberOfProduct' => $arrNumberOfProduct,
												'arrNumberOfService' => $arrNumberOfService,
												'numHot' => $numHot,
												'numBook' => $numBook,
												'arrNumberOfOrder' => $arrNumberOfOrder,
												'arrNumberOfAcc' => $arrNumberOfAcc]);
	}

	public function editDetailService(Request $request) { //
		//$this->validator($request->all())->validate();
		$this->updateDetailService($request->all());
		$id = $request->session()->get('idService');
		$steps = DB::table('service__details')->where('idService', $id)->paginate(8);
		$services = DB::table('services')->get();
		$categories = DB::table('categories')->get();
		$service = DB::table('services')->where('id', $id)->first(); // lấy tên cate
		$arrNumberOfProduct = $request->session()->get('arrNumberOfProduct');
		$arrNumberOfService = $request->session()->get('arrNumberOfService');
		$numHot = $request->session()->get('numHot');
		$numBook = $request->session()->get('numBook');
		$arrNumberOfOrder = $request->session()->get('arrNumberOfOrder');
		$arrNumberOfAcc = $request->session()->get('arrNumberOfAcc');
		return view('_adminView.service.show_service')->with(['steps'=> $steps,
															'services'=> $services,
															'categories' => $categories,
															'service' => $service,
												'arrNumberOfProduct' => $arrNumberOfProduct,
												'arrNumberOfService' => $arrNumberOfService,
												'numHot' => $numHot,
												'numBook' => $numBook,
												'arrNumberOfOrder' => $arrNumberOfOrder,
												'arrNumberOfAcc' => $arrNumberOfAcc]);
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
            //'content' => $data['content'],
            'idService' => $data['idService']));
    }

    public function showStepOfServiceToEdit($id, Request $request) {
    	$step = DB::table('service__details')->where('id', $id)->first();
    	$services = DB::table('services')->get();
    	$categories = DB::table('categories')->get();
		$p = $request->session()->get('idService');
		$arrNumberOfProduct = $request->session()->get('arrNumberOfProduct');
		$arrNumberOfService = $request->session()->get('arrNumberOfService');
		$numHot = $request->session()->get('numHot');
		$numBook = $request->session()->get('numBook');
		$arrNumberOfOrder = $request->session()->get('arrNumberOfOrder');
		$arrNumberOfAcc = $request->session()->get('arrNumberOfAcc');
    	return view('_adminView.service.edit_step')->with(['services'=> $services,
    													   'categories' => $categories,
														   'idService' => $p,
													       'step' => $step,
												'arrNumberOfProduct' => $arrNumberOfProduct,
												'arrNumberOfService' => $arrNumberOfService,
												'numHot' => $numHot,
												'numBook' => $numBook,
												'arrNumberOfOrder' => $arrNumberOfOrder,
												'arrNumberOfAcc' => $arrNumberOfAcc]);
    }

    public function deleteStep($id, Request $request) {
    	Service_Details::where('id', $id)->delete();
    	$id = $request->session()->get('idService');
		$steps = DB::table('service__details')->where('idService', $id)->paginate(8);
		$services = DB::table('services')->get();
		$categories = DB::table('categories')->get();
		$service = DB::table('services')->where('id', $id)->first(); // lấy tên cate
		$arrNumberOfProduct = $request->session()->get('arrNumberOfProduct');
		$arrNumberOfService = $request->session()->get('arrNumberOfService');
		$numHot = $request->session()->get('numHot');
		$numBook = $request->session()->get('numBook');
		$arrNumberOfOrder = $request->session()->get('arrNumberOfOrder');
		$arrNumberOfAcc = $request->session()->get('arrNumberOfAcc');
		return view('_adminView.service.show_service')->with(['steps'=> $steps,
															'services'=> $services,
															'categories' => $categories,
															'service' => $service,
												'arrNumberOfProduct' => $arrNumberOfProduct,
												'arrNumberOfService' => $arrNumberOfService,
												'numHot' => $numHot,
												'numBook' => $numBook,
												'arrNumberOfOrder' => $arrNumberOfOrder,
												'arrNumberOfAcc' => $arrNumberOfAcc]);
    }
    //
}
