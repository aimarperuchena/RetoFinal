<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Producto extends Model
{

	use SoftDeletes;

   protected $table="producto";
   protected $fillable=["nombre","descripcion"];

   public function producto_sociedad(){
    return $this->hasMany(ProductoSociedad::class);
   }
}
