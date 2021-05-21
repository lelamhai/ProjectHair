<?php

namespace App\Http\Controllers\AllController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;

class CartController extends Controller
{
	public function index() {
		$carts = Cart::with('products', 'users')->get();
		return view('_allView.cart')->with('carts', $carts);
	}

	public function deleteCart(Request $request)
	{
		Cart::where('idUser', $request->userId)->where('idPro', $request->proId)->delete();
		DB::delete('delete from carts where idUser = 1 and idPro = ?', [$request->userId], [$request->proId]);
		return response()->json([
			'message' => 'Data deleted successfully!'
		]);
		
	}

	// public function plusOrMinusCart(Request $request)
	// {

	// }
}
