<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table="factura";
    protected $fillable=["reserva_id", "fecha","personas","importe"];

    public function reserva(){
        return $this->belongsTo(Reserva::class);
    }

    public function factura(){
        return $this->hasOne(Linea::class);
    }
}
