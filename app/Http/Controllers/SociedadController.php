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
use App\Http\Requests\ReservaRequest;
use App\Http\Requests\ReservaFechaRequest;
use App\Http\Requests\AltaSociedadRequest;

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

  public function reservaFecha(ReservaFechaRequest $request, $sociedad_id)
  {
    $validated = $request->validated();
    $fecha = $request->fecha;
    $newDate = date("Y-m-d", strtotime($fecha));
    $tipo = TipoReserva::find($request->tipo);
    $sociedad = Sociedad::find($sociedad_id);
    // $mesas = DB::select('select * from mesa where mesa.sociedad_id = '.$sociedad->id.' and id not in(select mesa_id from mesa_reserva where reserva_id in(select id from reserva where fecha like "'.$newDate.'" and sociedad_id='.$sociedad_id.' and tipo_id = '.$request->tipo.'))');
    $mesas = Mesa::where('sociedad_id',$sociedad->id)->get();

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
  public function crear(ReservaRequest $request, $sociedad_id, $tipo_id)
  {
    $mesa = Mesa::find($request->mesa);

    if ($request->personas <= $mesa->capacidad) {
      $validated = $request->validated();
      $user = Auth::user();
      $tipo = TipoReserva::find($tipo_id);
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
  public function formAlta(Request $request)
  {
    return view('layouts.user.Perfil.altaSociedad');
  }

  public function alta(AltaSociedadRequest $request)
  {
    $validated = $request->validated();
    $client_id = '7911dcb95e81c27';
    $token = 'a6aa02570efaa91a08b86442df37c2e5ec717799';

    $imagen = $request->file('image');
    $image64 = base64_encode(file_get_contents($imagen)); //pasar la foto a base64

    //llamar a la api y subir la imagen
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.imgur.com/3/image",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => array('image' => $image64),
        CURLOPT_HTTPHEADER => array(
            // "Authorization: Client-ID {{7911dcb95e81c27}}",
            "Authorization: Bearer " . $token //nuestro token para acceder a la api
        ),
    ));
    $response = curl_exec($curl);
    $err = curl_error($curl);
    $json = json_decode($response);
    $link_image = $json->data->link;

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
      $json = json_decode($response);
      $user = Auth::user();
      $user_change = User::find($user->id);
      $sociedad = new PeticionNuevaSociedad;
      $sociedad->nombre =  $request->nombre;
      $sociedad->ubicacion = $request->ubicacion;
      $sociedad->telefono = $request->telefono;
      $sociedad->descripcion = $request->descripcion;
      $sociedad->estado = 'pendiente';
      $sociedad->link_plano = $link_image;
      $sociedad->user_id = $user_change->id;
      $sociedad->save();
      Auth::logout();
      return redirect('/');
    }
  }
}
