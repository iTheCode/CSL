<?php

namespace App\Models;

use \App\Models\Area as Area;
use Illuminate\Database\Eloquent\Model as Model;

class Patient extends Model
{

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function area(){
        return $this->hasOne('App\Models\Area', 'id', 'area_id');
    }
    public function authorizations(){
        return $this->hasMany('App\Models\Authorization', 'patient_id', 'id')->orderBy('id', 'desc'); //Primero es la columna de la otra tabla, y luego la columna de este Modelo.
    }

    public function insureds(){
        return $this->hasOne('App\Models\Insured', 'patient_id', 'id');
    }

}
