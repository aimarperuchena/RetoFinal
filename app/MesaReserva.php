<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MesaReserva extends Model
{
  protected $table="mesa_reserva";
  protected $fillable=["reserva_id","mesa_id"];
}
