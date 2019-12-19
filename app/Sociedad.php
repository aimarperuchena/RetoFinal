<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sociedad extends Model
{
    protected $table='sociedad';
    protected $fillable=['nombre','ubicacion','telefono','administrador_id'];
}
