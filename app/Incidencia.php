<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    protected $table='incidencia';
    protected $fillable=["sociedad_id","descripcion","estado","fecha"];
    public function sociedad(){
        return $this->belongsTo(Sociedad::class);
    }
}