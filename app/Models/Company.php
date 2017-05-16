<?php

namespace App\Models;

use \App\Models\Area as Area;
use Illuminate\Database\Eloquent\Model as Model;

class Company extends Model
{

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }
}
