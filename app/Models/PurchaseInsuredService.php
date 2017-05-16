<?php

namespace App\Models;

use \App\Models\Area as Area;
use Illuminate\Database\Eloquent\Model as Model;

class PurchaseInsuredService extends Model
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

    public function insuredservice(){
        return $this->hasOne('App\Models\InsuredService', 'id', 'insured_service_id');
    }

    public function service(){
        return $this->hasOne('App\Models\Service', 'id', 'service_id');
    }
    public function serviceexented(){
        return $this->hasOne('App\Models\ServiceExented', 'id', 'service_exented_id');
    }
}
