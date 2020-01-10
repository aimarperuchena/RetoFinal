<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeticionSociedad extends Model
{
    protected $table="peticion_sociedad";
    protected $fillable=["sociedad_id","usuario_id","estado","created_at"];

    public function sociedad(){
        return $this->belongsTo(Sociedad::class);
    }

    public function usuario(){
        return $this->belongsTo(User::class);
    }
}
