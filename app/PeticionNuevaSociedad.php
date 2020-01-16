<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PeticionNuevaSociedad extends Model
{

    use SoftDeletes;

    protected $table="peticion_nueva_sociedad";
    protected $fillable=["nombre","telefono","estado","user_id","created_at"];

    /*public function sociedad(){
        return $this->belongsTo(Sociedad::class);
    }*/

    public function users(){
        return $this->belongsToMany('App\User', 'id', 'user_id');
    }
}
