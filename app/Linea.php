<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Linea extends Model
{
    use SoftDeletes;

    protected $table="linea";
    protected $fillable=["producto_sociedad_id","factura_id","unidades","sociedad_id"];

    public function producto(){
        return $this->belongsTo(ProductoSociedad::class, 'producto_sociedad_id');
    }

    public function factura(){
        return $this->belongsTo(Factura::class);
    }
}
