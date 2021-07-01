<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Books;
use App\Models\Rates;
use App\Models\Comment;
use App\User;

class BookingController extends Controller
{

    public function index (Request $request) {
        $services = DB::table('services')->get();
		$categories = DB::table('categories')->get();
        
        $books = Books::with('users_book', 'emp_book', 'service_book')->paginate(10);//nhớ lọc lại
        return view("_adminView.booking.booking")->with(['services' => $services,
                                                         'categories' => $categories,
                                                         'books' => $books
                                                         ]);
    } 

    public function deleteBook (Request $request) {
        DB::table('books')->where('id', $request->id)->delete();
        $hots = DB::table('modesl_hair__hots')->get();
        $services = DB::table('services')->get();
        $categories = DB::table('categories')->get();
        $books = Books::with('users_book', 'emp_book', 'service_book')->paginate(3);//nhớ lọc lại
        return view("_adminView.booking.booking")->with(['services' => $services,
                                                         'categories' => $categories,
                                                         'books' => $books,
                                                         'hots' => $hots]);
    }

    public function updateStatus(Request $request)
    {
        $book = Books::find($request->idBook);
        $book->finish = $request->status;
        $book->save();

        return response()->json([
			'result' => true
		]);
    }

    public function createReport(Request $request)
    {
        $rate = new Rates;
        $rate->idUser = $request->idUser;
        $rate->idEmp = $request->idEmp;
        $rate->rate = $request->rating;
        $rate->save();

        $comment = new Comment;
        $comment->idUser = $request->idUser;
        $comment->idEmp = $request->idEmp;
        $comment->content = $request->comment;
        $comment->save();
        return redirect('/admin/booking');
    }

    public function reportStylelist(Request $request)
    {
        $book = Books::find($request->idBook);
        $book->finish = $request->status;
        $book->save();

        return response()->json([
			'result' => true
		]);
    }
}