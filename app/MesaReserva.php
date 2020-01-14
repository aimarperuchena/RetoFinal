<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MesaReserva extends Model
{
  use SoftDeletes;

  protected $table="mesa_reserva";
  protected $fillable=["reserva_id","mesa_id"];
}
