<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Factura;
use App\User;
use App\Reserva;

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
    $denegado = Reserva::where('id',$reserva_id)->where('usuario_id',$user->id)->get();
    $facturas = Factura::where('reserva_id',$reserva_id)->get();
    if (count($denegado) === 1) {
      return view('layouts.user.Facturas.show')-> with('facturas' , $facturas)->with('reserva', $reserva_id);
    }else {
      return redirect('/denegado');
    }
  }
}
