<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table="author";
    public function author_book(){
        return $this->hasOne('App\Author_Book','id','author_id');
    }
}
