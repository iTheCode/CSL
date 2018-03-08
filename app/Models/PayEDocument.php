<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class PayEDocument extends Model
{
    public function pay_document_type(){
        return $this->hasOne('App\Models\PayDocumentType', 'id', 'pay_document_type_id'); //Primero es la columna de la otra tabla, y luego la columna de este Modelo.
    }
    public function employee(){
        return $this->hasOne('App\Models\Employee', 'id', 'employee_id');
    }
    public function authorization(){
        return $this->hasOne('App\Models\Authorization', 'id', 'authorization_id'); //Primero es la columna de la otra tabla, y luego la columna de este Modelo.
    }
    public function particularservice(){
        return $this->hasOne('App\Models\ParticularService', 'id', 'particular_service');
    }
    public function insuredservice(){
        return $this->hasOne('App\Models\InsuredService', 'id', 'insured_service');
    }
}
