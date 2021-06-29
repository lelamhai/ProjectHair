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

        return view('_adminView.models_hot.index')->with(['services' => $services, 'categories' => $categories, 'hots' => $hots]);

    }

    public function add()
    {
        $services = DB::table('services')->get();
        $categories = DB::table('categories')->get();

        return view('_adminView.models_hot.add')->with(['services' => $services, 'categories' => $categories]);
    }


    public function insert(Request $request)
    {
        $services = DB::table('services')->get();
        $categories = DB::table('categories')->get();

        $model = new ModelsHot();
        $model->title = $request->title;
        $model->thumbnail = $request->thumbnail;
        $model->save();
        
        return redirect('/admin/models/add');
    }

    public function edit(Request $request)
    {
        $services = DB::table('services')->get();
        $categories = DB::table('categories')->get();

        $models = DB::table('modesl_hair__hots')->where('id',$request->id)->get();
        return view('_adminView.models_hot.edit')->with(['services' => $services, 'categories' => $categories, 'models'=>$models]);
    }

    public function update(Request $request)
    {

        //DB::table('modesl_hair__hots')->where('id', $request->id)->update(['thumbnail', "lelamhai"]);//,'title',$request->title, ]);
        $model = ModelsHot::find($request->id);
        $model->title = $request->title;
        $model->thumbnail = $request->thumbnail;
        $model->save();
        
        return redirect('/admin/models/edit/'.$request->id);
    }

    public function delete(Request $request)
    {
        DB::table('modesl_hair__hots')->where('id',$request->id)->delete();
        return redirect('/admin/models/index');
    }




    // public function postHot (Request $request) {
    //     DB::table('modesl_hair__hots')->insert(array(
    //         array('thumbnail' => $request->thumbnail),
    //     ));
    //     $hots = DB::table('modesl_hair__hots')->get();
    //     $services = DB::table('services')->get();
    //     $categories = DB::table('categories')->get();
    //     $books = Books::with('users_book', 'emp_book', 'service_book')->paginate(3);//nhớ lọc lại
    //     $arrNumberOfProduct = $request->session()->get('arrNumberOfProduct');
    //     $arrNumberOfService = $request->session()->get('arrNumberOfService');
    //     $numHot = $request->session()->get('numHot');
    //     $numBook = $request->session()->get('numBook');
    //     $arrNumberOfOrder = $request->session()->get('arrNumberOfOrder');
    //     $arrNumberOfAcc = $request->session()->get('arrNumberOfAcc');
    //     return view("_adminView.models_hot.show")->with(['services' => $services,
    //                                                      'categories' => $categories,
    //                                                      'books' => $books,
    //                                                      'hots' => $hots,
    //                                                      'arrNumberOfProduct' => $arrNumberOfProduct,
    //                                             'arrNumberOfService' => $arrNumberOfService,
    //                                             'numHot' => $numHot,
    //                                             'numBook' => $numBook,
    //                                             'arrNumberOfOrder' => $arrNumberOfOrder,
    //                                             'arrNumberOfAcc' => $arrNumberOfAcc]);
    // }

    // public function deleteHot (Request $request) {
    //     DB::table('modesl_hair__hots')->where('id', $request->id)->delete();
    //     $hots = DB::table('modesl_hair__hots')->get();
    //     $services = DB::table('services')->get();
    //     $categories = DB::table('categories')->get();
    //     $books = Books::with('users_book', 'emp_book', 'service_book')->paginate(3);//nhớ lọc lại
    //     $arrNumberOfProduct = $request->session()->get('arrNumberOfProduct');
    //     $arrNumberOfService = $request->session()->get('arrNumberOfService');
    //     $numHot = $request->session()->get('numHot');
    //     $numBook = $request->session()->get('numBook');
    //     $arrNumberOfOrder = $request->session()->get('arrNumberOfOrder');
    //     $arrNumberOfAcc = $request->session()->get('arrNumberOfAcc');
    //     return view("_adminView.models_hot.show")->with(['services' => $services,
    //                                                      'categories' => $categories,
    //                                                      'books' => $books,
    //                                                      'hots' => $hots,
    //                                                      'arrNumberOfProduct' => $arrNumberOfProduct,
    //                                             'arrNumberOfService' => $arrNumberOfService,
    //                                             'numHot' => $numHot,
    //                                             'numBook' => $numBook,
    //                                             'arrNumberOfOrder' => $arrNumberOfOrder,
    //                                             'arrNumberOfAcc' => $arrNumberOfAcc]);
    // }

    // public function showFormToAdd(Request $request) {
    //     $hots = DB::table('modesl_hair__hots')->get();
    //     $services = DB::table('services')->get();
    //     $categories = DB::table('categories')->get();
    //     $books = Books::with('users_book', 'emp_book', 'service_book')->paginate(3);//nhớ lọc lại
    //     $arrNumberOfProduct = $request->session()->get('arrNumberOfProduct');
    //     $arrNumberOfService = $request->session()->get('arrNumberOfService');
    //     $numHot = $request->session()->get('numHot');
    //     $numBook = $request->session()->get('numBook');
    //     $arrNumberOfOrder = $request->session()->get('arrNumberOfOrder');
    //     $arrNumberOfAcc = $request->session()->get('arrNumberOfAcc');
    //     return view('_adminView.models_hot.add')->with(['services' => $services,
    //                                                      'categories' => $categories,
    //                                                      'books' => $books,
    //                                                      'hots' => $hots,
    //                                                      'arrNumberOfProduct' => $arrNumberOfProduct,
    //                                             'arrNumberOfService' => $arrNumberOfService,
    //                                             'numHot' => $numHot,
    //                                             'numBook' => $numBook,
    //                                             'arrNumberOfOrder' => $arrNumberOfOrder,
    //                                             'arrNumberOfAcc' => $arrNumberOfAcc]);
    // }
}
