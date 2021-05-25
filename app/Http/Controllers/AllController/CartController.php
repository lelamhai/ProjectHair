<?php

namespace App\Http\Controllers\AllController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;

class CartController extends Controller
{

	public function index (Request $request) {
		
		$email = $request->session()->get('email');
		$user = DB::table('user')->where('email', $email)->first();
		$carts = Cart::with('products', 'users')->where('idUser', $user->id)->get();
		$request->session()->put('countCart',count( $carts));

		return view('_allView.cart')->with('carts', $carts);
	}

	public function show(Request $request) {

		// Cart::create([
        //     'idPro' => $request->idPro,
        //     'idUser' => $request->idUser,
        //     'amount' => $request->amount
		// ]);

		$email = $request->session()->get('email');
		$user = DB::table('user')->where('email', $email)->first();
		$carts = Cart::with('products', 'users')->where('idUser', $user->id)->get();
		$request->session()->put('countCart',count( $carts));

		return view('_allView.cart')->with('carts', $carts);
	}

	public function deleteCart(Request $request)
	{
		Cart::where('idUser', $request->userId)->where('idPro', $request->proId)->delete();
		return response()->json([
			'message' => 'Data deleted successfully!'
		]);
		
	}

	public function plusOrMinusCart(Request $request)
	{
		Cart::where('idUser', $request->userId)->where('idPro', $request->proId)->update(['amount' => $request->amount]);
		return  $request;
	}
}
