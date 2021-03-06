<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserva;
use App\Factura;
use App\Linea;
use App\ProductoSociedad;
use app\TipoReserva;
use app\Sociedad;
use Auth;

class FacturaController extends Controller
{
  public function create($reserva_id){
    $user = Auth::user();
    //subselect
    $reserva = Reserva::find($reserva_id);
    $factura = new Factura;
    $factura->sociedad_id = $reserva->sociedad_id;
    $factura->reserva_id = $reserva->id;
    $factura->fecha = date("Y/m/d");
    $factura->personas = $reserva->personas;
    $factura->importe = 0;
    $factura->save();
    return view('layouts.user.Facturas.create')-> with('factura' , $factura);
  }
  public function store(Request $request, $reserva_id){
    $user = Auth::user();
    $reserva = Reserva::find($reserva_id);
    $producto = ProductoSociedad::where('producto_id',$request->producto)->where('sociedad_id',$reserva->sociedad_id)->first();
    $importe = $producto->precio * $request->cantidad;
    $stock = $producto->stock;
    $stockFinal = $stock - $request->cantidad;
    if ($stockFinal >= 0) {
      $producto->stock = $stockFinal;
      $factura = new Factura;
      $factura->sociedad_id = $reserva->sociedad_id;
      $factura->reserva_id = $reserva->id;
      $factura->fecha = date("Y-m-d");
      $factura->personas = $reserva->personas;
      $factura->importe = $importe;
      $producto->save();
      $factura->save();
      $linea = new Linea;
      $linea->sociedad_id = $reserva->sociedad_id;
      $linea->producto_sociedad_id = $producto->id;
      $linea->factura_id = $factura->id;
      $linea->importe = $importe;
      $linea->unidades = $request->cantidad;
      $linea->save();
      return redirect('/reservas');
    }else {
      $reservas = Reserva::where('usuario_id',$user->id)->whereNotIn('id', Factura::pluck('reserva_id'))->get();
      $error = "La cantidad introducida supera el stock del producto seleccionado, stock de ".$producto->nombre." es: ".$stock;
      return view('layouts.user.Facturas.create')-> with('reservas' , $reservas)-> with('error' , $error);
    }
  }
}
