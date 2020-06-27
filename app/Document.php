<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = ['name' ,'type','user_id'];

	
	public function user(){

		$this->belongsTo('App\User');
	}
     
}

