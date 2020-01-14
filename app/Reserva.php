<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reserva extends Model
{
  use SoftDeletes;

  protected $table="reserva";
  protected $fillable=["sociedad_id","usuario_id","tipo_id","fecha","personas"];

  public function sociedad(){
    return $this->belongsTo(Sociedad::class);
  }
  public function usuario(){
    return $this->belongsTo(User::class);
  }

  public function tipo(){
    return $this->belongsTo(TipoReserva::class);
  }

  public function factura(){
    return $this->hasOne(Factura::class);
  }

  public function mesas(){
    return $this->belongsToMany(Mesa::class);
}
}
