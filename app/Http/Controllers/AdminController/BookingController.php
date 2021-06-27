<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Books;

class BookingController extends Controller
{
    public function index (Request $request) {
        $hots = DB::table('modesl_hair__hots')->get();
        $services = DB::table('services')->get();
		$categories = DB::table('categories')->get();
        $books = Books::with('users_book', 'emp_book', 'service_book')->paginate(3);//nhớ lọc lại
        $arrNumberOfProduct = $request->session()->get('arrNumberOfProduct');
        $arrNumberOfService = $request->session()->get('arrNumberOfService');
        $numHot = $request->session()->get('numHot');
        $numBook = $request->session()->get('numBook');
        $arrNumberOfOrder = $request->session()->get('arrNumberOfOrder');
        $arrNumberOfAcc = $request->session()->get('arrNumberOfAcc');
        return view("_adminView.booking.booking")->with(['services' => $services,
                                                         'categories' => $categories,
                                                         'books' => $books,
                                                         'hots' => $hots,
                                                         'arrNumberOfProduct' => $arrNumberOfProduct,
                                                'arrNumberOfService' => $arrNumberOfService,
                                                'numHot' => $numHot,
                                                'numBook' => $numBook,
                                                'arrNumberOfOrder' => $arrNumberOfOrder,
                                                'arrNumberOfAcc' => $arrNumberOfAcc]);
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