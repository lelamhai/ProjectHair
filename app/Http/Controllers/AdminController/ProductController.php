<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Products;

class ProductController extends Controller
{
    public function showProductOfCategories ($id, Request $request) {
        $products = DB::table('products')->where('idCate', $id)->paginate(8);
        $categories = DB::table('categories')->get(); 
        $services = DB::table('services')->get();
        $category = DB::table('categories')->where('idCate', $id)->first(); // name cate
        $request->session()->put('idCate', $id); // to add product
        $arrNumberOfProduct = $request->session()->get('arrNumberOfProduct');
        $arrNumberOfService = $request->session()->get('arrNumberOfService');
        $numHot = $request->session()->get('numHot');
        $numBook = $request->session()->get('numBook');
        $arrNumberOfOrder = $request->session()->get('arrNumberOfOrder');
        $arrNumberOfAcc = $request->session()->get('arrNumberOfAcc');
        return view('_adminView.product.show_product')->with(['products'=> $products,
                                                            'categories'=> $categories,
                                                            'services' => $services,
                                                            'category' => $category,
                                                            'arrNumberOfProduct' => $arrNumberOfProduct,
                                                'arrNumberOfService' => $arrNumberOfService,
                                                'numHot' => $numHot,
                                                'numBook' => $numBook,
                                                'arrNumberOfOrder' => $arrNumberOfOrder,
                                                'arrNumberOfAcc' => $arrNumberOfAcc]);
    }

    public function showFormToEdit ($idPro, Request $request) {
        $product = DB::table('products')->where('idPro', $idPro)->first();
        $services = DB::table('services')->get();
        $categories = DB::table('categories')->get();
        $p = $request->session()->get('idCate');
        $arrNumberOfProduct = $request->session()->get('arrNumberOfProduct');
        $arrNumberOfService = $request->session()->get('arrNumberOfService');
        $numHot = $request->session()->get('numHot');
        $numBook = $request->session()->get('numBook');
        $arrNumberOfOrder = $request->session()->get('arrNumberOfOrder');
        $arrNumberOfAcc = $request->session()->get('arrNumberOfAcc');
        return view('_adminView.product.edit_product')->with(['services'=> $services,
                                                           'categories' => $categories,
                                                           'idCate' => $p,
                                                           'product' => $product,
                                                           'arrNumberOfProduct' => $arrNumberOfProduct,
                                                'arrNumberOfService' => $arrNumberOfService,
                                                'numHot' => $numHot,
                                                'numBook' => $numBook,
                                                'arrNumberOfOrder' => $arrNumberOfOrder,
                                                'arrNumberOfAcc' => $arrNumberOfAcc]);
    }

    public function showFormToAdd (Request $request) {
        $services = DB::table('services')->get();
        $categories = DB::table('categories')->get();
        $p = $request->session()->get('idCate');
        $arrNumberOfProduct = $request->session()->get('arrNumberOfProduct');
        $arrNumberOfService = $request->session()->get('arrNumberOfService');
        $numHot = $request->session()->get('numHot');
        $numBook = $request->session()->get('numBook');
        $arrNumberOfOrder = $request->session()->get('arrNumberOfOrder');
        $arrNumberOfAcc = $request->session()->get('arrNumberOfAcc');
        return view('_adminView.product.add_product')->with(['services'=> $services,
                                                           'categories' => $categories,
                                                           'idCate' => $p,
                                                           'arrNumberOfProduct' => $arrNumberOfProduct,
                                                'arrNumberOfService' => $arrNumberOfService,
                                                'numHot' => $numHot,
                                                'numBook' => $numBook,
                                                'arrNumberOfOrder' => $arrNumberOfOrder,
                                                'arrNumberOfAcc' => $arrNumberOfAcc]);
    }

    public function postAdd(Request $request) {
        //$this->validator($request->all())->validate();
        $this->addProduct($request->all());
        $id = $request->session()->get('idCate');
        $products = DB::table('products')->where('idCate', $id)->paginate(8);
        $categories = DB::table('categories')->get(); 
        $services = DB::table('services')->get();
        $category = DB::table('categories')->where('idCate', $id)->first(); // name cate
        $arrNumberOfProduct = $request->session()->get('arrNumberOfProduct');
        $arrNumberOfService = $request->session()->get('arrNumberOfService');
        $numHot = $request->session()->get('numHot');
        $numBook = $request->session()->get('numBook');
        $arrNumberOfOrder = $request->session()->get('arrNumberOfOrder');
        $arrNumberOfAcc = $request->session()->get('arrNumberOfAcc');
        return view('_adminView.product.show_product')->with(['products'=> $products,
                                                            'categories'=> $categories,
                                                            'services' => $services,
                                                            'category' => $category,
                                                           'arrNumberOfProduct' => $arrNumberOfProduct,
                                                'arrNumberOfService' => $arrNumberOfService,
                                                'numHot' => $numHot,
                                                'numBook' => $numBook,
                                                'arrNumberOfOrder' => $arrNumberOfOrder,
                                                'arrNumberOfAcc' => $arrNumberOfAcc]);
    }

    public function postEdit (Request $request) {
        //$this->validator($request->all())->validate();
        $this->updateProduct($request->all());
        $id = $request->session()->get('idCate');
        $products = DB::table('products')->where('idCate', $id)->paginate(8);
        $categories = DB::table('categories')->get(); 
        $services = DB::table('services')->get();
        $category = DB::table('categories')->where('idCate', $id)->first(); // name cate
        $arrNumberOfProduct = $request->session()->get('arrNumberOfProduct');
        $arrNumberOfService = $request->session()->get('arrNumberOfService');
        $numHot = $request->session()->get('numHot');
        $numBook = $request->session()->get('numBook');
        $arrNumberOfOrder = $request->session()->get('arrNumberOfOrder');
        $arrNumberOfAcc = $request->session()->get('arrNumberOfAcc');
        return view('_adminView.product.show_product')->with(['products'=> $products,
                                                            'categories'=> $categories,
                                                            'services' => $services,
                                                            'category' => $category,
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
            //'price' => ['required', 'string'],
            'title' => ['required', 'string'],
            //'thumbnail' => ['required', 'string'],
        ]);
    }

    protected function updateProduct(array $data)
    {
        return Products::where('idPro', $data['idPro'])->update(array('idCate' => $data['idCate'],
            'title' => $data['title'],
            'price' => $data['price'],
            'thumbnail' => $data['thumbnail'],
            //'short_Description' => $data['short_Description'] . ' ',
            'detailed_description' => $data['detailed_description'],
        ));
    }

    protected function addProduct(array $data)
    {
        return Products::create([
            'idCate' => $data['idCate'],
            'title' => $data['title'],
            'price' => $data['price'],
            'thumbnail' => $data['thumbnail'],
            'short_Description' => $data['short_Description'] . ' ',
            'detailed_description' => $data['detailed_description'] . ' ',
        ]);
    }

    public function deleteProduct($idPro, Request $request) {
        Products::where('idPro', $idPro)->delete();
        $id = $request->session()->get('idCate');
        $products = DB::table('products')->where('idCate', $id)->paginate(8);
        $categories = DB::table('categories')->get(); 
        $services = DB::table('services')->get();
        $category = DB::table('categories')->where('idCate', $id)->first(); // name cate
        $arrNumberOfProduct = $request->session()->get('arrNumberOfProduct');
        $arrNumberOfService = $request->session()->get('arrNumberOfService');
        $numHot = $request->session()->get('numHot');
        $numBook = $request->session()->get('numBook');
        $arrNumberOfOrder = $request->session()->get('arrNumberOfOrder');
        $arrNumberOfAcc = $request->session()->get('arrNumberOfAcc');
        return view('_adminView.product.show_product')->with(['products'=> $products,
                                                            'categories'=> $categories,
                                                            'services' => $services,
                                                            'category' => $category,
                                                           'arrNumberOfProduct' => $arrNumberOfProduct,
                                                'arrNumberOfService' => $arrNumberOfService,
                                                'numHot' => $numHot,
                                                'numBook' => $numBook,
                                                'arrNumberOfOrder' => $arrNumberOfOrder,
                                                'arrNumberOfAcc' => $arrNumberOfAcc]);
    }
}
