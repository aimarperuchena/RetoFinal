<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sociedad;
use App\Mesa;
use App\TipoReserva;
use App\Reserva;
use App\MesaReserva;
use Auth;

class SociedadController extends Controller
{
  public function info($id)
  {
    $sociedad = Sociedad::find($id);
    return view('layouts.user.SociedadViews.info.infoSociedadView') -> with('sociedad', $sociedad);
  }
  public function reserva($id)
  {
    $sociedad = Sociedad::find($id);
    $numMesa = Mesa::where('sociedad_id',$id)->get();
    $tipo = TipoReserva::all();
    return view('layouts.user.SociedadViews.reserva.reservaView') -> with('mesas', $numMesa)-> with('sociedad', $sociedad)-> with('tipo', $tipo);
  }
  public function crear(Request $request, $sociead_id)
  {
    $user = Auth::user();
    $resreva = new Reserva;
    $resreva->sociedad_id = $sociead_id;
    $resreva->usuario_id = $user->id;
    $resreva->tipo_id = $request->tipo;
    $resreva->fecha = $request->fecha;
    $resreva->personas = $request->personas;
    $resreva->save();

    $resrevaMesa = new MesaReserva;
    $resrevaMesa->reserva_id = $resreva->id;
    $resrevaMesa->mesa_id = $request->mesa;
    $resrevaMesa->save();

    return view('layouts.user.SociedadViews.reserva.success')-> with('fecha', $request->fecha)-> with('mesa', $request->mesa)-> with('personas', $request->personas);
  }
}
