<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \App\Employee as Employee;

class HospitalizationRoom extends Model
{
    public function hospitalization(){
        return $this->hasOne('App\Models\Hospitalization', 'hospitalization_room_id', 'id')->WhereNull('date_output');
    }
}
