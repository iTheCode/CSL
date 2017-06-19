<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PayDocumentGroup extends Model
{
    public function insurance(){
        return $this->hasOne('App\Models\Insurance', 'ruc', 'insurance_ruc'); //Primero es la columna

	}
    public function pay_documents(){
        return $this->hasMany('App\Models\PayDocument', 'pay_document_group_id', 'id'); //Primero es la columna

	}
}
