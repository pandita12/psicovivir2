<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['user_id_send', 'title','message' ,'user_id_received','status'];

     public function user(){

    	$this->belongsTo('App\User');
    }
}
