<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public $table="Laravel_posts";
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
    public function categories(){
        return $this->belongsTo('App\Category');
    }
}
