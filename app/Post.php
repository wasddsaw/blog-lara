<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     //table name
     protected $table = 'posts';
     //primary key
     public $primayKey = 'id';
     //timestamp
     public $timestamp = true;
 
     public function user(){
         return $this->belongsTo('App\User');
     }
}
