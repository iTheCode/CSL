<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

use \App\Models\Area as Area;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Employee extends Authenticatable
{
    
    use HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'employees';
    protected $fillable = [
        'username', 'password',
    ];

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

    public function area(){
        return $this->hasOne('App\Models\Area', 'id', 'area_id');
    }

}
