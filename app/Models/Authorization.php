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

}
