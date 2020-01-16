<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UsuarioSociedad extends Model
{
    use SoftDeletes;
    protected $table="sociedad_user";
    protected $fillable=["id","sociedad_id","user_id"];

    public function scopeBuscarpor($query, $tipo, $buscar) {
    	if ( ($tipo) && ($buscar) ) {
    		return $query->where($tipo,'like',"%$buscar%");
    	}
    }

    public function users(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function sociedades(){
        return $this->belongsTo(Sociedad::class);
    }
}
