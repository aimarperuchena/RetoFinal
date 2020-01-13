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
  public function show($id){
    $user = Auth::user();
    $facturas = Factura::where('reserva_id',$id)->get();
    return view('layouts.user.Facturas.show')-> with('facturas' , $facturas)->with('reserva', $id);
  }
}
