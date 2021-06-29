<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{

	protected $fillable = [
        'idUser', 'idEmp', 'date', 'time', 'service', 'index', 'finish',
    ];

	public function users_book () {
		return $this->belongsTo(related: 'App\User', foreignKey:'idUser', ownerKey:'id');
		
	}

	public function emp_book () {
		return $this->belongsTo(related: 'App\User', foreignKey:'idEmp', ownerKey:'id');
	}

	public function service_book () {
		return $this->belongsTo(related: 'App\Models\Service_Details', foreignKey:'service', ownerKey:'id');
	}
    
}

