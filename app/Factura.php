<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Factura extends Model
{
    use SoftDeletes;

    protected $table="factura";
    protected $fillable=["reserva_id", "fecha","personas","importe"];

    public function reserva(){
        return $this->belongsTo(Reserva::class);
    }

    public function lineas(){
        return $this->hasMany(Linea::class);
    }
}
