<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sociedad extends Model
{
    protected $table = 'sociedad';
    protected $fillable = ['nombre', 'ubicacion', 'telefono', 'administrador_id', 'link_plano'];


    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'sociedad_user');
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
