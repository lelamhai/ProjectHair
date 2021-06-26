<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Books;
use App\Models\ModelsHot;

class HotController extends Controller
{
    public function index() {
        $hots = DB::table('modesl_hair__hots')->get();
        $services = DB::table('services')->get();
        $categories = DB::table('categories')->get();
        $books = Books::with('users_book', 'emp_book', 'service_book')->paginate(3);//nhớ lọc lại
        return view("_adminView.models_hot.show")->with(['services' => $services,
                                                         'categories' => $categories,
                                                         'books' => $books,
                                                         'hots' => $hots]);
    }

    public function deleteHot (Request $request) {
        ModelsHot::where('id', $request->id)->delete();
        return response()->json([
            'result' => true
        ]);
    }

    public function showFormToAdd() {
        $hots = DB::table('modesl_hair__hots')->get();
        $services = DB::table('services')->get();
        $categories = DB::table('categories')->get();
        $books = Books::with('users_book', 'emp_book', 'service_book')->paginate(3);//nhớ lọc lại
        return view('_adminView.models_hot.add')->with(['services' => $services,
                                                         'categories' => $categories,
                                                         'books' => $books,
                                                         'hots' => $hots]);
    }
}
