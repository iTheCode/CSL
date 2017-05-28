<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Authorization extends Model
{

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'authorizations';
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function patient(){
        return $this->hasOne('App\Models\Patient', 'id', 'patient_id');
    }

    public function insureds(){
        return $this->hasOne('App\Models\Insured', 'patient_id', 'patient_id');
    }

    public function coverage(){
        return $this->hasOne('App\Models\Coverage', 'authorization_id', 'id');
    }

    public function authorization_types(){
        return $this->hasOne('App\Models\AuthorizationType', 'id', 'authorization_type_id');
    }
    public function employee(){
        return $this->hasOne('App\Models\Employee', 'id', 'employee_id');
    }
    public function insuredservices(){
        return $this->hasMany('App\Models\InsuredService', 'authorization_id', 'id'); //Primero es la columna de la otra tabla, y luego la columna de este Modelo.
    }
    public function insuredpharmacies(){
        return $this->hasMany('App\Models\InsuredPharmacy', 'authorization_id', 'id'); //Primero es la columna de la otra tabla, y luego la columna de este Modelo.
    }
    public function particularservices(){
        return $this->hasOne('App\Models\ParticularService', 'authorization_id', 'id'); //Primero es la columna de la otra tabla, y luego la columna de este Modelo.
    }

    public function pay_documents(){
        return $this->hasMany('App\Models\PayDocument', 'authorization_id', 'id'); //Primero es la columna de la otra tabla, y luego la columna de este Modelo.
    }
}
