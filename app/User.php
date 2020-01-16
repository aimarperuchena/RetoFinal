<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable implements MustVerifyEmail
{

    use SoftDeletes;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id','nombre', 'email', 'password','role_id','telefono','apellido'
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

    public function scopeBuscarpor($query, $tipo, $buscar) {
    	if ( ($tipo) && ($buscar) ) {
    		return $query->where($tipo,'like',"%$buscar%");
    	}
    }

    public function nueva(){
        return $this->hasOne(PeticionNuevaSociedad::class, 'user_id');
    }

    public function usuarioSociedades(){
        return $this->hasMany('App\UsuarioSociedad','id','user_id');
    }

    public function sociedades(){
        return $this->hasOne(Sociedad::class, 'administrador_id');
    }
    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function peticionSociedad(){
        return $this->hasMany('App\PeticionSociedad');
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
