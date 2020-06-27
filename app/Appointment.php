<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['date','time','user_id','status'];

    public function user(){

		$this->belongsTo('App\User');

    }
}
