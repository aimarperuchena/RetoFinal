<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserva;
use app\Factura;
use app\TipoReserva;
use app\Sociedad;
use Auth;

class FacturaController extends Controller
{
  public function create(){
    $user = Auth::user();
    //subselect
    $reservas = Reserva::where('usuario_id',$user->id)->whereNotIn('id', DB::table('factura')->pluck('reserva_id'))->get();
    return view('layouts.user.Facturas.create')-> with('reservas' , $reservas);
  }
  public function store($id){
    $user = Auth::user();
    $reserva = Reserva::find($id);
    $facturas = new Facturas;
    $factura->sociedad_id = $reserva->sociedad_id;
    $factura->reserva_id = $reserva->id;
    $factura->fecha = date(Y-m-d);
    $factura->personas = $reservas->personas;

    return redirect('/reservas');
  }
}
