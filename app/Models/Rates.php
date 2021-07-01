<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rates extends Model
{
    protected $table = "rates";

    public function users_rate () {
        return $this->belongsTo(related: 'App\User', foreignKey:'idUser', ownerKey:'id');
        
    }

    public function emp_rate () {
        return $this->belongsTo(related: 'App\User', foreignKey:'idEmp', ownerKey:'id');
    }
    //
}
