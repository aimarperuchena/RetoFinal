<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sociedad;
use App\Mesa;
use App\TipoReserva;
use App\Reserva;
use App\MesaReserva;
use App\UsuarioSociedad;
use App\PeticionSociedad;
use Auth;
use Illuminate\Support\Facades\DB;
class SociedadController extends Controller
{
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
      return view('layouts.user.SociedadViews.reserva.reservaView')->with('mesas', $numMesa)->with('sociedad', $sociedad)->with('tipo', $tipo);
    } else {
      return redirect('/denegado');
    }
  }

  public function reservaFecha(Request $request, $sociedad_id)
  {
    //infosociedad llama a este que llamara a la vista
    //AQUI METER LA FECHA QUE VENGA DEL REQUEST
    $fecha = $request->fecha;
    $tipo = TipoReserva::find($request->tipo);
    $sociedad = Sociedad::find($sociedad_id);
    //METER EL ID SOCIEDAD
    $mesas = DB::select('select * from mesa where sociedad_id='.$sociedad_id.' and id not in(select id from mesa_reserva where reserva_id in(select id from reserva where fecha="'.$fecha.'" and sociedad_id='.$sociedad_id.'))');

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

    return view('layouts.user.SociedadViews.reserva.success')->with('fecha', $request->fecha)->with('mesa', $request->mesa)->with('personas', $request->personas);
  }
}
