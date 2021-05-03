<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
	public function products () {
		return $this->belongsToMany(Products::class, 'idPro');
	}

	public function users () {
		return $this->hasMany(App\User::class);
	}
    //
}
