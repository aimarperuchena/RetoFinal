<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
  protected $table="reservas";
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
}
