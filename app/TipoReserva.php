<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoReserva extends Model
{
    use SoftDeletes;

    protected $table="tipo_reserva";
    protected $fillable=["nombre"];
    public function reserva(){
        return $this->hasMany(Reserva::class);
    }
}
