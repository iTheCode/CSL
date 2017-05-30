<?php

namespace App\Models;

use \App\Models\Area as Area;
use Illuminate\Database\Eloquent\Model as Model;

class InsuredPharmacy extends Model
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
    public function employee(){
        return $this->hasOne('App\Models\Employee', 'id', 'employee_id');
    }
    //
    public function purchaseinsuredpharmacies(){
        return $this->hasMany('App\Models\PurchaseInsuredPharmacy', 'insured_pharmacy_id', 'id');
    }
    public function pharmtypesale(){
        return $this->hasOne('App\Models\PharmTypeSale', 'id', 'pharm_type_sale_id');
    }
}
