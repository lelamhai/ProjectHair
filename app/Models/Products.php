<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
	public function cart(){
		return $this->hasManyTo(Cart::class);
	}
    //
}
