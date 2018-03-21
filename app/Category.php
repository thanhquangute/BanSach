<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="category";
    public function category(){
        return $this->hasOne('App\Category_Item','id','category_id');
    }
}
