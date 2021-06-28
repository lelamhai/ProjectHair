<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Service_Details;
use App\Models\Books;
use App\Models\ModelsHot;
use App\Models\User;

class DashboardController extends Controller
{
	public function index() 
	{
		$services = DB::table('services')->get();
		$servicesDetail = DB::table('service__details')->get();
		
		$categories = DB::table('categories')->get();
		$products = DB::table('products')->get();

		$booking = Books::with('users_book', 'emp_book', 'service_book')->get();

		$orderPaid = DB::table('orders')->where('status','Paid')->get();
		$orderProsecc = DB::table('orders')->where('status','Prosecc')->get();

		$hairModels = DB::table('modesl_hair__hots')->get();

		$users = DB::table('user')->select('user.human_rights', DB::raw('count(*) as total'))
									->groupBy('user.human_rights')
									->get();

		// dd($users);
		
		return view("_adminView.dashboard.dashboard")->with([	'services' => $services,
																'servicesDetail' =>$servicesDetail,
																'categories' => $categories,
																'products' => $products,
																'booking' => $booking,
																'orderPaid' => $orderPaid,
																'orderProsecc' => $orderProsecc,
																'hairModels' => $hairModels,
																'users' => $users
															]);
	}
}
