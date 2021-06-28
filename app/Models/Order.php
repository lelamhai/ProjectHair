<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

	protected $fillable = [
       'note', 'totalMoney', 'status', 'idUser',
    ];

	public function order_vnp(){
		return $this->hasMany(related: 'App\Models\Payments', foreignKey: 'idOrder', localKey: 'idOrder');
	}


	public function order_user () {
		return $this->belongsTo(related: 'App\User', foreignKey:'idUser', ownerKey:'id');
	}
    //
}
