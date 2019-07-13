<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //to change table name
    protected $table = 'posts';
    //primary key

    public function user(){
        return $this->belongsTo('App\User');
    }

    
    
}
