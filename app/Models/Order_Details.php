<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_Details extends Model
{
    protected $fillable = [
        'idOrder', 'idPro', 'amount',
    ];

    public function order_pro () {
        return $this->belongsTo(related: 'App\Models\Products', foreignKey:'idPro', ownerKey:'idPro');
    }
    //
}
