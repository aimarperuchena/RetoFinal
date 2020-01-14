<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductoSociedad extends Model
{
  use SoftDeletes;

 
  protected $table="productos_sociedad";
  protected $fillable=["producto_id","sociedad_id","precio","stock"];

  public function producto(){
    return $this->belongsTo(Producto::class,'producto_id');
  }

  public function lineas(){
    return $this->hasMany(Linea::class);
  }
  public function sociedad(){
    return $this->belongsTo(Scoiedad::class);
  }

 
}
