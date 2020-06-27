<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model

{
    protected $fillable = ['name_test', 'user_id','active'];

	protected $table = "status";

    
     public function user(){

		$this->belongsTo('App\User');

    }
}


