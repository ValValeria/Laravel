<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Notifiable;

    protected  $table='posts_laravel';
    public $timestamps = false;
    public $fillable=[
      "title","id","img",'descr',"user_id"
    ];
      
    /**
     * @return App\User
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
