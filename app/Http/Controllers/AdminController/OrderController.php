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
}
