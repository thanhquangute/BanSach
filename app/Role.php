<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table="role";
    public function user(){
        return $this->hasOne('App\User','id','role_id');
    }
}
