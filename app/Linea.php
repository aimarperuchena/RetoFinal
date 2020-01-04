<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linea extends Model
{
    protected $table="linea";
    protected $fillable=["producto_id","factura_id","unidades"];

    public function producto(){
        return $this->belongsTo(ProductoSociedad::class);
    }

    public function factura(){
        return $this->belongsTo(Factura::class);
    }
}
