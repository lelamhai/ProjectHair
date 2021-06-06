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
		$index = DB::table('books')->select('idEmp')->where('idEmp', $request->userId)->get();
		return response()->json([
			'result' => true,
			'index'	=> $index
		]);
	}


	public function user(Request $request)
	{
		$comments = DB::table('comments')->where('idEmp', $request->userId)->get();
		$user = DB::table('user')->where('id', $request->userId)->get();
		$index = DB::table('books')->select('idEmp')->where('idEmp', $request->userId)->get();
		return response()->json([
			'result' => true,
			'user'	=> $user,
			'comments' => $comments,
			'index' => $index
		]);
	}

	public function comment(Request $request)
	{
		$comments = Comment::with('users_comment', 'emp_comment')->where('idEmp', $request->userId)->get();

		return response()->json([
			'result' => true,
			'comments'	=> $comments
		]);
	}
}
