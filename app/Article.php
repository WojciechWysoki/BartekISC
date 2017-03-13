<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table="categories";
    
    public function comments(){
        return $this->hasMany('App\Article','article_id');
    }
    
    public function category(){
        return $this->belongsTo('App\Category');
    }
}
