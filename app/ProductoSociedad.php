<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Linea;
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

  public function hasLineas(){
    $lineas=Linea::where('producto_sociedad_id',$this->id)->count();
    return $lineas;
  }

 
}
