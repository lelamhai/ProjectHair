<?php

namespace App\Http\Controllers\AllController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Books;
use App\Models\Comment;

class PaymentController extends Controller
{
	public function index(Request $request) {
		$total = $request->total;
		return view('_allView.payment')->with('total', $total);
	}

	public function createPaymentVNPay(Request $request)
	{
		$vnp_TxnRef = $_POST['order_id']; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
		$vnp_OrderInfo = $_POST['order_desc'];
		$vnp_OrderType = $_POST['order_type'];
		$vnp_Amount = str_replace(',', '', $_POST['amount']) * 100;
		$vnp_Locale = $_POST['language'];
		$vnp_BankCode = $_POST['bank_code'];
		$vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

		$inputData = array(
			"vnp_Version" => "2.0.0",
			"vnp_TmnCode" => env('VNP_TMNCODE'),
			"vnp_Amount" => $vnp_Amount,
			"vnp_Command" => "pay",
			"vnp_CreateDate" => date('YmdHis'),
			"vnp_CurrCode" => "VND",
			"vnp_IpAddr" => $vnp_IpAddr,
			"vnp_Locale" => $vnp_Locale,
			"vnp_OrderInfo" => $vnp_OrderInfo,
			"vnp_OrderType" => $vnp_OrderType,
			"vnp_ReturnUrl" => route('vnpay.return'),
			"vnp_TxnRef" => $vnp_TxnRef,
		);

		if (isset($vnp_BankCode) && $vnp_BankCode != "") {
			$inputData['vnp_BankCode'] = $vnp_BankCode;
		}
		ksort($inputData);
		$query = "";
		$i = 0;
		$hashdata = "";
		foreach ($inputData as $key => $value) {
			if ($i == 1) {
				$hashdata .= '&' . $key . "=" . $value;
			} else {
				$hashdata .= $key . "=" . $value;
				$i = 1;
			}
			$query .= urlencode($key) . "=" . urlencode($value) . '&';
		}

		$vnp_Url = env('VNP_URL') . "?" . $query;
		$vnp_HashSecret = env('VNP_HASHSECRET');
		if (isset($vnp_HashSecret)) {
			$vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
			$vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
		}
		$returnData = array('code' => '00'
			, 'message' => 'success'
			, 'data' => $vnp_Url);
		return redirect($vnp_Url);
	}

	public function vnpayReturn(Request $request)
	{
		dd($request->toArray());
	}
}
