<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoReserva extends Model
{
    protected $table="tipo_reserva";
    protected $fillable=["nombre"];
    public function reserva(){
        return $this->hasMany(Reserva::class);
    }
}
