<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'email', 'password','role_id','telefono','apellido'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sociedades(){
        return $this->belongsToMany('App\Sociedad');
    }
    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function isWebMaster(){
        return($this->role_id==1);
    }

    public function isAdmin(){
        return($this->role_id==2);
    }
    public function isUser(){
        return($this->role_id==3);
    }

    public function getRole(){
        return ($this->role_id);
    }
}
