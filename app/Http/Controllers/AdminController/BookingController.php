<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Books;

class BookingController extends Controller
{
    public function index () {
        $services = DB::table('services')->get();
		$categories = DB::table('categories')->get();
        $books = Books::with('users_book', 'emp_book', 'service_book')->paginate(3);//nhớ lọc lại
        return view("_adminView.booking.booking")->with(['services' => $services,
                                                         'categories' => $categories,
                                                         'books' => $books]);
    }
}