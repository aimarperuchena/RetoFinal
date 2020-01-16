<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sociedad;
use App\Mesa;
use App\TipoReserva;
use App\Reserva;
use App\MesaReserva;
use App\UsuarioSociedad;
use App\User;
use App\PeticionSociedad;
use App\PeticionNuevaSociedad;
use Auth;
use Illuminate\Support\Facades\DB;
class SociedadController extends Controller
{
  public function __construct()
  {
   $this->middleware('role:3');
  }
  public function info($id)
  {
    $user = Auth::user();
    $sociedad = Sociedad::find($id);
    $suscripcion = UsuarioSociedad::where('user_id', $user->id)->where('sociedad_id', $id)->get();
    $suscrito = count($suscripcion) > 0 ? true : false;
    return view('layouts.user.SociedadViews.info.infoSociedadView')->with('sociedad', $sociedad)->with('suscrito', $suscrito);
  }
  public function reserva($sociedad_id)
  {
    $user = Auth::user();
    $denegado = UsuarioSociedad::where('sociedad_id', $sociedad_id)->where('user_id', $user->id)->get();
    $sociedad = Sociedad::find($sociedad_id);
    $numMesa = Mesa::where('sociedad_id', $sociedad_id)->get();
    $tipo = TipoReserva::all();
    if (count($denegado) === 1) {
      return view('layouts.user.SociedadViews.reserva.reservaView')->with('sociedad', $sociedad)->with('tipo', $tipo);
    } else {
      return redirect('/denegado');
    }
  }

  public function reservaFecha(Request $request, $sociedad_id)
  {
    $fecha = $request->fecha;
    $newDate = date("Y-m-d", strtotime($fecha));
    $tipo = TipoReserva::find($request->tipo);
    $sociedad = Sociedad::find($sociedad_id);
    $mesas = DB::select('select * from mesa where mesa.sociedad_id='.$sociedad->id.' and id not in(select mesa_id from mesa_reserva where reserva_id in(select id from reserva where fecha='.$newDate.' and sociedad_id='.$sociedad_id.' and tipo_id = '.$request->tipo.'))');

    return view('layouts.user.Reservas.index')->with('mesas',$mesas)->with('tipo',$tipo)->with('fecha',$fecha)->with('sociedad',$sociedad);
  }
  public function peticion($id)
  {
    $user = Auth::user();
    $peticion = new PeticionSociedad;
    $peticion->sociedad_id = $id;
    $peticion->usuario_id = $user->id;
    $peticion->estado = 'pendiente';
    $peticion->save();
    return redirect('/user');
  }
  public function crear(Request $request, $sociead_id, $tipo_id)
  {
    $user = Auth::user();
    $tipo = TipoReserva::find($tipo_id);
    $resreva = new Reserva;
    $resreva->sociedad_id = $sociead_id;
    $resreva->usuario_id = $user->id;
    $resreva->tipo_id = $tipo->id;
    $resreva->fecha = $request->fecha;
    $resreva->personas = $request->personas;
    $resreva->save();

    $resrevaMesa = new MesaReserva;
    $resrevaMesa->reserva_id = $resreva->id;
    $resrevaMesa->mesa_id = $request->mesa;
    $resrevaMesa->save();

    return view('layouts.user.SociedadViews.reserva.success')->with('fecha', $request->fecha)->with('mesa', $request->mesa)->with('personas', $request->personas);
  }
  public function formAlta(Request $request)
  {
    return view('layouts.user.Perfil.altaSociedad');
  }

  public function alta(Request $request)
  {
    $user = Auth::user();
    $user_change = User::find($user->id);
    $sociedad = new PeticionNuevaSociedad;
    $sociedad->nombre =  $request->ubicacion;
    $sociedad->ubicacion = $request->ubicacion;
    $sociedad->telefono = $request->telefono;
    $sociedad->descripcion = $request->descripcion;
    $sociedad->estado = 'pendiente';
    $sociedad->link_plano = $request->link_plano;
    $sociedad->user_id = $user_change->id;
    $sociedad->save();
    Auth::logout();
    return redirect('/');
  }
}
