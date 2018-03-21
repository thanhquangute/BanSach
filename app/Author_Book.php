<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author_Book extends Model
{
   protected $table="author_book";
    public function author(){
    	return $this->belongsTo('App\Author','author_id','id');
    }
    public function book(){
    	return $this->belongsTo('App\Book','book_id','id');
    }
}
