<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Sociedad;
use App\Producto;
use App\Linea;
use App\Factura;
use App\ProductoSociedad;
use App\Reserva;
use App\TipoReserva;

class LineaController extends Controller
{
  public function __construct()
  {
   $this->middleware('role:3');
  }
  public function index($reserva_id){
    $user = Auth::user();
    $denegado = Reserva::where('id',$reserva_id)->where('usuario_id',$user->id)->get();
    $facturas = Factura::where('reserva_id',$reserva_id)->first();
    $sociedad = Sociedad::find($facturas->sociedad_id);
    if (count($denegado) === 1) {
      return view('layouts.user.Lineas.show')-> with('facturas' , $facturas)-> with('sociedad' , $sociedad)-> with('user' , $user);
    }else {
      return redirect('/denegado');
    }
  }
}
