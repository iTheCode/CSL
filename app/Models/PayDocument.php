<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \App\Employee as Employee;

class PayDocument extends Model
{
    public function pay_document_type(){
        return $this->hasOne('App\Models\PayDocumentType', 'id', 'pay_document_type_id'); //Primero es la columna de la otra tabla, y luego la columna de este Modelo.
    }
    public function employee(){
        return $this->hasOne('App\Models\Employee', 'id', 'employee_id');
    }
}
