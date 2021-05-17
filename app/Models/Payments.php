<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
	public function payer () {
		return $this->belongsTo(related: 'App\User', foreignKey:'idUser', ownerKey:'id');
	}

	public function order () {
		return $this->belongsTo(related: 'App\Models\Order', foreignKey:'idOrder', ownerKey:'idOrder');
	}
    //
}
