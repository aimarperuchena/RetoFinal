<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Factura;
use App\User;
use App\Reserva;
use App\MesaReserva;
use App\Sociedad;
use App\TipoReserva;
use App\Mesa;

class ReservaController extends Controller
{
  public function __construct()
  {
   $this->middleware('role:3');
  }
  public function index(){
    $user = Auth::user();
    $reserva = Reserva::where('usuario_id',$user->id)->get();
    return view('layouts.user.Reservas.show')-> with('reservas' , $reserva);
  }
  public function show($reserva_id){
    $user = Auth::user();
    $denegado = Reserva::where('id',$reserva_id)->where('usuario_id',$user->id)->first();
    $facturas = Factura::where('reserva_id',$reserva_id)->first(); 
    $mesaReserva = MesaReserva::where('reserva_id', $reserva_id)->first();
    $mesas = Mesa::whereIn('id', $mesaReserva)->get();

    if (!isNull($denegado)) {
    return view('layouts.user.Facturas.show')-> with('facturas' , $facturas)->with('reserva', $reserva_id)->with('mesas',$mesas);
    }else {
      return redirect('/denegado');
    }
  }
  public function edit($reserva_id){
    $user = Auth::user();
    $reserva = Reserva::find($reserva_id);
    $sociedad = Sociedad::find($reserva->sociedad_id);//mejor usar modal relacion
    $tipoEditar = TipoReserva::find($reserva->tipo_id);//mejor usar modal relacion
    $tipo = TipoReserva::all();
    $reserva ->delete();
    return view('layouts.user.SociedadViews.reserva.reservaView') -> with('sociedad', $sociedad)-> with('tipo', $tipo)-> with('fechaEditar', $reserva->fecha)-> with('tipoEditar', $tipoEditar)->with('tipo', $tipo);
  }

  public function delete($reserva_id){
    $user = Auth::user();
    $denegado = Reserva::where('usuario_id', $user->id)->count();
    $reserva = Reserva::find($reserva_id);
    $reserva -> delete();
    if ($denegado > 0) {
      return redirect('/reservas');
    }else {
      return redirect('/denegado');
    }
  }
}
