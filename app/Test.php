<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
	protected $fillable = ['name', 'result1','result2','result3','result4','result5','result6','result7','result8','result9','result10','result11','result12','result13','result14','result15','result16','result17','result18','result19','result20','result21','result22','result23','result24','result25','result26','result27','result28','result29','user_id','result_total','indication'];

	public function user(){

		$this->belongsTo('App\User');

	}

}

