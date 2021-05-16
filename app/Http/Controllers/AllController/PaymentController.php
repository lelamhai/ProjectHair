<?php

namespace App\Http\Controllers\AllController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Books;
use App\Models\Comment;

class PaymentController extends Controller
{
	public function index() {
		return view('_allView.payment');
	}
}
