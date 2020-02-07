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
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UpdateReservaRequest;

class ReservaController extends Controller
{
  public function __construct()
  {
    $this->middleware('role:3');
  }
  public function index()
  {
    $user = Auth::user();
    $reserva = Reserva::where('usuario_id', $user->id)->get();
    return view('layouts.user.Reservas.show')->with('reservas', $reserva);
  }
  public function show($reserva_id)
  {
    $user = Auth::user();

    $factura = Factura::where('reserva_id', $reserva_id)->first();

    $mesas=DB::select('SELECT mesa.nombre, mesa.capacidad FROM mesa, mesa_reserva where mesa.id=mesa_reserva.mesa_id and mesa_reserva.reserva_id='.$reserva_id);


    $denegado = Reserva::where('id', $reserva_id)->where('usuario_id', $user->id)->first();

    if (isset($denegado)) {
      return view('layouts.user.Facturas.show')-> with('factura' , $factura)->with('reserva', $reserva_id)->with('mesas',$mesas);

    } else {
      return redirect('/denegado');
    }

  }
  public function edit($reserva_id)
  {
    $user = Auth::user();
    $denegado = Reserva::where('id',$reserva_id)->where('usuario_id',$user->id)->count();
    if ($denegado===0) {
      return redirect('/denegado');
    }
    $reserva = Reserva::find($reserva_id);
    $sociedad = Sociedad::find($reserva->sociedad_id); //mejor usar modal relacion
    $tipoEditar = TipoReserva::find($reserva->tipo_id); //mejor usar modal relacion
    $tipo = TipoReserva::all();
    $mesas = Mesa::where('sociedad_id',$sociedad->id)->get();
    return view('layouts.user.SociedadViews.reserva.update')->with('sociedad', $sociedad)->with('tipo', $tipo)->with('fechaEditar', $reserva->fecha)->with('tipoEditar', $tipoEditar)->with('tipo', $tipo)->with('personaEditar', $reserva->personas)->with('mesas', $mesas)->with('oldReserva', $reserva_id);
  }
  public function update(Request $request, $sociedad_id, $tipo_id, $oldReserva)
  {
    $old_reserva = Reserva::find($oldReserva);
    $old_reserva ->delete();
    $mesa = Mesa::find($request->mesa);

    if ($request->personas <= $mesa->capacidad) {
      $user = Auth::user();
      $tipo = TipoReserva::find($request->tipo);
      $resreva = new Reserva;
      $resreva->sociedad_id = $sociedad_id;
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
    }else {
      $fecha = $request->fecha;
      $newDate = date("Y-m-d", strtotime($fecha));
      $tipo = TipoReserva::find($tipo_id);
      $sociedad = Sociedad::find($sociedad_id);
      // $mesas = DB::select('select * from mesa where mesa.sociedad_id = '.$sociedad->id.' and id not in(select mesa_id from mesa_reserva where reserva_id in(select id from reserva where fecha like "'.$newDate.'" and sociedad_id='.$sociedad_id.' and tipo_id = '.$request->tipo.'))');
      $mesas = Mesa::where('sociedad_id',$sociedad->id)->get();
      $mensaje = 'La capacidad de la mesa no soporta la cantidad de personas introducidas.';
      return view('layouts.user.Reservas.index')->with('mesas',$mesas)->with('tipo',$tipo)->with('fecha',$fecha)->with('sociedad',$sociedad)->with('mensaje',$mensaje);
    }
  }

  public function delete($reserva_id)
  {
    $user = Auth::user();
    $denegado = Reserva::where('id',$reserva_id)->where('usuario_id',$user->id)->count();
    if ($denegado===0) {
      return redirect('/denegado');
    } else {
      $reserva = Reserva::find($reserva_id);
    $reserva->delete();
      return redirect('/reservas');
   }
  }
}
