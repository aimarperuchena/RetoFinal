<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Incidencia extends Model
{
    use SoftDeletes;

    protected $table='incidencia';
    protected $fillable=["sociedad_id","descripcion","estado","fecha"];
    public function sociedad(){
        return $this->belongsTo(Sociedad::class);
    }
}
