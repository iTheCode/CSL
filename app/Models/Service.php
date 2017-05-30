<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \App\Employee as Employee;

class Service extends Model
{
    public function clinicarea(){
        return $this->hasOne('App\Models\ClinicArea', 'id', 'clinic_area_id');
    }
}
