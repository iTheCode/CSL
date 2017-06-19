<?php

namespace App\Models;

use \App\Models\Area as Area;
use Illuminate\Database\Eloquent\Model as Model;

class PurchaseInsuredPharmacy extends Model
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
    public function service(){
        return $this->hasOne('App\Models\Service', 'id', 'service_id');
    }
    public function digemid_product(){
        return $this->hasOne('App\Models\DigemidProduct', 'id', 'digemid_product_id');
    }
    public function cum_sunasa_product(){
        return $this->hasOne('App\Models\CumSunasaProduct', 'id', 'cum_sunasa_product_id');
    }
    public function product_pharm_type(){
        return $this->hasOne('App\Models\ProductPharmType', 'id', 'product_pharm_type_id');
    }
    public function ean_product(){
        return $this->hasOne('App\Models\EanProduct', 'id', ' ean_product_id');
    }
    public function product_pharm_exented(){
        return $this->hasOne('App\Models\ProducPharmExented', 'id', ' product_pharm_exented_id');
    } 
}
