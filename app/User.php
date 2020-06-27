<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable

{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'age','password','phone_number','home','place_of_birth','type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function histories(){

        $this->hasMany('App\History');

    }

    public function messages(){

        $this->hasMany('App\Message');

    }

    public function documents(){

        $this->hasMany('App\Document');

    }

     public function appointements(){

        $this->hasMany('App\Appointment');

    }

    public function status_tests(){

        $this->hasMany('App\Status_Test');
    }

     public function tests(){

        $this->hasMany('App\Test');

    }
}
