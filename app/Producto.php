<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
   protected $table="producto";
   protected $fillable=["nombre","descripcion"];

   public function producto_sociedad(){
    return $this->hasMany(ProductoSociedad::class);
   }
}
