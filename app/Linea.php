<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linea extends Model
{
    protected $table="linea";
    protected $fillable=["producto_sociedad_id","factura_id","unidades"];

    public function producto(){
        return $this->belongsTo(ProductoSociedad::class, 'producto_sociedad_id');
    }

    public function factura(){
        return $this->belongsTo(Factura::class);
    }
}
