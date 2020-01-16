<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Sociedad extends Model
{


    use SoftDeletes;

    protected $table = 'sociedad';
    protected $fillable = ['nombre', 'ubicacion', 'telefono', 'administrador_id', 'link_plano', 'deleted_at'];

    public function scopeBuscarpor($query, $tipo, $buscar) {
    	if ( ($tipo) && ($buscar) ) {
    		return $query->where($tipo,'like',"%$buscar%");
    	}
    }

    public function users(){
        return $this->belongsTo('App\User', 'administrador_id', 'id');
    }

    public function incidencias()
    {
        return $this->hasMany(Incidencia::class);
    }

    public function productos()
    {
        return $this->hasMany(ProductoSociedad::class);
    }

    public function mesas()
    {
        return $this->hasMany(Mesa::class);
    }

    public function reservas(){
        return $this->hasMany(Reserva::class);
    }
}
