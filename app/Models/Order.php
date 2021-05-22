<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

	protected $fillable = [
        'payMents', 'totalMoney', 'status', 'idUser',
    ];

	public function order_vnp(){
		return $this->hasMany(related: 'App\Models\Payments', foreignKey: 'idOrder', localKey: 'idOrder');
	}
    //
}
