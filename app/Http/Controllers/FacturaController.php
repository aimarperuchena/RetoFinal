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
  public function create(){
    $user = Auth::user();
    //subselect
    $reservas = Reserva::where('usuario_id',$user->id)->whereNotIn('id', Factura::pluck('reserva_id'))->get();
    return view('layouts.user.Facturas.create')-> with('reservas' , $reservas);
  }
  public function store(Request $request, $reserva_id){
    $user = Auth::user();
    $reserva = Reserva::find($reserva_id);
    $producto = ProductoSociedad::where('producto_id',$request->producto)->where('sociedad_id',$reserva->sociedad_id)->first();
    $importe = $producto->precio * $request->cantidad;
    $factura = new Factura;
    $factura->sociedad_id = $reserva->sociedad_id;
    $factura->reserva_id = $reserva->id;
    $factura->fecha = date("Y-m-d");
    $factura->personas = $reserva->personas;
    $factura->importe = $importe;
    $factura->save();
    $linea = new Linea;
    $linea->sociedad_id = $reserva->sociedad_id;
    $linea->producto_sociedad_id = $producto->id;
    $linea->factura_id = $factura->id;
    $linea->importe = $importe;
    $linea->unidades = $request->cantidad;
    $linea->save();
    return redirect('/reservas');
  }
}
