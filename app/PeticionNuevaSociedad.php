<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeticionNuevaSociedad extends Model
{


    protected $table="peticion_nueva_sociedad";
    protected $fillable=["nombre","telefono","estado","created_at"];

    /*public function sociedad(){
        return $this->belongsTo(Sociedad::class);
    }*/

    public function usuario(){
        return $this->belongsTo(User::class);
    }
}
