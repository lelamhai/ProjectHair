<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\Order_Details;

class OrderController extends Controller
{
    public function showOrders () {
        $orders = Order::with('order_user')->paginate(5);
        $i_orders = Order_Details::with('order_pro')->get();
        $services = DB::table('services')->get();
        $categories = DB::table('categories')->get();
        return view('_adminView.order.show')->with(['orders' => $orders,
                                                  'i_orders' => $i_orders,
                                                  'services' => $services,
                                                  'categories' => $categories]);
    }

    public function deleteOrder(Request $request)
    {
        Order::where('idOrder', $request->idOrder)->delete();
        return response()->json([
			'result' => true
		]);
    }

    public function detailOrder(Request $request)
    {
        $listIdPorduts = DB::table('order__details')->select("idPro")->where('idOrder', $request->idOrder)->get();//Order_Details::select('idPro')->where('idOrder', $request->idOrder);

        $data = array();
        foreach($listIdPorduts as $item)
        {
            //$value = DB::table('products')->where('idPro', $item->idPro)->get();

            $value = DB::table('order__details')
            ->join('products', 'products.idPro', '=', 'order__details.idPro')
            ->where('products.idPro', '=', $item->idPro)
            ->where('order__details.idOrder', '=', $request->idOrder)
            ->get();
            array_push($data, $value);
        }
        return response()->json([
            'result' => true,
            'data' =>  $data
        ]);
    }
}
