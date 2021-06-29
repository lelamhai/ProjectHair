<?php

namespace App\Http\Controllers\AllController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Books;
use App\Models\Comment;

class BookController extends Controller
{
	public function index() {

		$emps = DB::table('user')->where('human_rights', 1)->get();

		$commentsCustomer = DB::table('comments')->get();

		$services = DB::table('services')->get();

		$steps = DB::table('service__details')->get(); // 

		return view('_allView.book')->with(['commentsCustomer' => $commentsCustomer,
											'emps'=> $emps,
											'services' => $services,
											'steps' => $steps]);
	}

	public function loadFirst(Request $request)
	{
		$date = date('Y-m-d');
		$date1 = strtotime ( '+2 day' , strtotime ( $date ) ) ;
		$date1 = date ( 'Y-m-d' , $date1 );

		$date2 = strtotime ( '+2 day' , strtotime ( $date ) ) ;
		$date2 = date ( 'Y-m-d' , $date2 );

		$index = DB::table('books')->select('index')->where('idEmp', $request->userId)
													->where('date', $date)
													->orwhere('date', $date1)
													->orwhere('date', $date2)->get();


		$rates = DB::table('rates')->select('rate')->where('idEmp', $request->userId)->get();
		return response()->json([
			'result' => true,
			'index'	=> $index,
			'rates' => $rates
		]);

		
	}


	public function user(Request $request)
	{
		$date = date('Y-m-d');
		$date1 = strtotime ( '+2 day' , strtotime ( $date ) ) ;
		$date1 = date ( 'Y-m-d' , $date1 );

		$date2 = strtotime ( '+2 day' , strtotime ( $date ) ) ;
		$date2 = date ( 'Y-m-d' , $date2 );

		$comments = DB::table('comments')->where('idEmp', $request->userId)->get();
		$user = DB::table('user')->where('id', $request->userId)->get();
		$index = DB::table('books')->select('index')->where('idEmp', $request->userId)
													->where('date', $date)
													->orwhere('date', $date1)
													->orwhere('date', $date2)->get();
		return response()->json([
			'result' => true,
			'user'	=> $user,
			'index'	=> $index,
			'comments' => $comments
			
		]);
	}

	public function comment(Request $request)
	{
		$comments = Comment::with('users_comment', 'emp_comment')->where('idEmp', $request->userId)->get();
		$rates = DB::table('rates')->select('rate')->where('idEmp', $request->userId)->get();
		return response()->json([
			'result' => true,
			'comments'	=> $comments,
			'rates' => $rates
		]);
	}

	public function insertBook(Request $request)
	{
		$date = date('Y-m-d',strtotime($request->date));
		Books::create([
			'idUser' => $request->userId,
			'idEmp' => $request->empId,
			'index' => $request->index,
			'service' => $request->service,
			'time' => $request->time,
			'finish' => 0,
			'date' => $date
		]);
	
		return response()->json([
			'result' => true
		]);
	}
}
