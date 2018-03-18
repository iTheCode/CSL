<?php

namespace App\Models;

use \App\Models\Area as Area;
use Illuminate\Database\Eloquent\Model as Model;

class InsuredService extends Model
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
    public function authorization(){
        return $this->hasOne('App\Models\Authorization', 'id', 'authorization_id');
    }
    public function doctor(){
        return $this->hasOne('App\Models\Doctor', 'id', 'doctor_id');
    }
    public function clinicarea(){
        return $this->hasOne('App\Models\ClinicArea', 'id', 'clinic_area_id');
    }
    public function employee(){
        return $this->hasOne('App\Models\Employee', 'id', 'employee_id');
    }
    public function purchaseinsuredservices(){
        return $this->hasMany('App\Models\PurchaseInsuredService', 'insured_service_id', 'id');
    }
    public function purchasecoverageservices(){
        return $this->hasMany('App\Models\PurchaseCoverageService', 'insured_service_id', 'id');
    }
}
