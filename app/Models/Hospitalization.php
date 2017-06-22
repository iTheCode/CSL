<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \App\Employee as Employee;

class Hospitalization extends Model
{
    public function authorization(){
        return $this->hasOne('App\Models\Authorization', 'id', 'authorization_id');
    }
    public function hospitalization_type(){
        return $this->hasOne('App\Models\HospitalizationType', 'id', '	hospitalization_type_id');
    }
    public function hospitalization_output_type(){
        return $this->hasOne('App\Models\HospitalizationOutputType', 'id', '	hospitalization_output_type_id');
    }
    public function hospitalization_room(){
        return $this->hasOne('App\Models\HospitalizationRoom', 'id', 'hospitalization_room_id');
    }
}
