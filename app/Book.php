<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
   protected $table="book";
    public function book_carousel(){
        return $this->hasOne('App\Carousel','id','book_id');
    }
    public function book_author(){
        return $this->hasOne('App\Author_Book','id','book_id');
    }
    public function book_publisher(){
    	return $this->belongsTo('App\Publisher','publisher_id','id');
    }
    public function book_category_item(){
    	return $this->belongsTo('App\Category_Item','category_item_id','id');
    }
    public function bill_detail(){
        return $this->hasMany('App\Bill_Detail','id','book_id');
    }
}
