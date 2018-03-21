<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table="promotion";
    public function promotion(){
    	return $this->hasMany('App\Promotion_Details','id','promotion_id');
    }
}
