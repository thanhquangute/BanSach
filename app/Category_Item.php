<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_Item extends Model
{
    protected $table="category_item";
    public function category_item(){
    	return $this->belongsTo('App\Category','category_id','id');
    }
    public function category_book(){
        return $this->hasOne('App\Book','id','category_item_id');
    }
}
