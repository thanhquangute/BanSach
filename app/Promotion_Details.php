<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion_Details extends Model
{
    protected $table="promotion_detail";
    public function promotion(){
    	return $this->belongsTo('App\Promotion','promotion_id','id');
    }
    public function book(){
    	return $this->belongsTo('App\Book','book_id','id');
    }
}
