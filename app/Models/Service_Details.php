<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service_Details extends Model
{
	protected $fillable = [
        'step', 'title', 'content', 'thumbnail', 'idService',
    ];

    public function service_book(){
        return $this->hasMany(related: 'App\Models\Books', foreignKey: 'service', localKey: 'id');
    }
    //
}
