<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Date extends Model
{

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function patient(){
        return $this->hasOne('App\Models\Patient', 'id', 'patient_id');
    }
    public function doctor(){
        return $this->hasOne('App\Models\Doctor', 'id', 'doctor_id');
    }
    public function speciality(){
        return $this->hasOne('App\Models\Speciality', 'id', 'speciality_id');
    }

}
