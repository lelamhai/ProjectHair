<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Books;

class BookingController extends Controller
{

    public function index (Request $request) {
        $services = DB::table('services')->get();
		$categories = DB::table('categories')->get();
        
        $books = Books::with('users_book', 'emp_book', 'service_book')->paginate(3);//nhớ lọc lại
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
}