<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
	protected $fillable = [
        'idCate', 'title', 'price', 'thumbnail', 'short_Description', 'detailed_description', 
    ];
	public function cart(){
		return $this->hasMany(related: 'App\Models\Cart', foreignKey: 'idPro', localKey: 'idPro');
	}

	public function order_i(){
		return $this->hasMany(related: 'App\Models\Order_Details', foreignKey: 'idPro', localKey: 'idPro');
	}
    //
}
