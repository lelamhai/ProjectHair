<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_Details extends Model
{
    protected $fillable = [
        'idOrder', 'idPro', 'amount',
    ];
    //
}
