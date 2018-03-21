<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    protected $table="carousel";
    public function carousel(){
    	return $this->belongsTo('App\Book','book_id','id');
    }
}
