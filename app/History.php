<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = ['user_id', 'clinical_summary','advances', 'applied_techniques'];


    public function user(){

    	$this->belongsTo('App\User');
    }
}
