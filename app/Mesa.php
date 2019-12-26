<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $table = "mesa";
    protected $fillable = ["sociedad_id", "capacidad"];

    public function sociedad()
    {
        return $this->belongsTo(Sociedad::class);
    }

    public function reservas()
    {
        return $this->belongsToMany(Reserva::class);
    }
}
