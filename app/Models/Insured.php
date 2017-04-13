<?php

namespace App\Models;

use \App\Models\Area as Area;
use Illuminate\Database\Eloquent\Model as Model;

class Insured extends Model
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
    
    public function insurance(){
        return $this->hasOne('App\Models\Insurance', 'id', 'insurance_id');
    }
}
