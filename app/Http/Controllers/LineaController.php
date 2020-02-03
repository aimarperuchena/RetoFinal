<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Sociedad;
use App\Producto;
use App\Linea;
use App\Factura;
use App\ProductoSociedad;
use App\UsuarioSociedad;
use App\Reserva;
use App\TipoReserva;

class LineaController extends Controller
{
  public function __construct()
  {
   $this->middleware('role:3');
  }
  public function index($factura_id){
    $user = Auth::user();
    $factura = Factura::find($factura_id);
    $reserva = Reserva::where('id',$factura->reserva_id)->where('usuario_id',$user->id)->get();
    $sociedad = Sociedad::find($factura->sociedad_id);
    if (count($reserva) === 1) {
      return view('layouts.user.Lineas.show')-> with('factura' , $factura)-> with('sociedad' , $sociedad)-> with('user' , $user)-> with('reserva' , $reserva);
    }else {
      return redirect('/denegado');
    }
  }
  public function lineaAdd($factura_id)
  {
      $user = Auth::user();
      $sociedad = UsuarioSociedad::where('user_id', $user->id)->first();
      $productos = ProductoSociedad::where('sociedad_id', $sociedad->sociedad_id)->get();
      $factura = Factura::find($factura_id);
      return view('layouts.user.Lineas.create')->with('sociedad', $sociedad)->with('productos', $productos)->with('factura', $factura);
  }

  public function lineaCreate(Request $request)
  {

      $user = Auth::user();
      $sociedad = Sociedad::where('administrador_id', $user->id)->first();
      $productos = ProductoSociedad::where('sociedad_id', $sociedad->id)->get();
      $factura = Factura::find($request->factura)->first();
      $reserva = Reserva::find($factura->reserva_id);
      $mesaReserva = MesaReserva::where('reserva_id', $reserva->id)->get();
      $mesas = Mesa::whereIn('id', $mesaReserva)->get();
      $producto = $request->producto;
      $unidades = $request->unidades;

      $productoElegido = ProductoSociedad::find($producto);
      $stock = $productoElegido->stock;
      if ($unidades > $stock) {
          $error = "El Producto " . $productoElegido->nombre . " solo tiene " . $productoElegido->stock . " unidades en stock";
          return view('layouts.admin.lineas.create')->with('sociedad', $sociedad)->with('productos', $productos)->with('factura', $factura)->with('error', $error);
      } else {
          $importeFactura = $factura->importe;
          $importeLinea = $unidades * $productoElegido->precio;
          $importeTotal = $importeFactura + $importeLinea;
          $linea = new Linea();
          $linea->producto_sociedad_id = $productoElegido->id;
          $linea->factura_id = $factura->id;
          $linea->unidades = $unidades;
          $linea->sociedad_id = $sociedad->id;
          $linea->importe = $importeLinea;
          $linea->save();
          $factura->importe = $importeTotal;
          $factura->save();
          $producto = ProductoSociedad::find($linea->producto_sociedad_id);
          $producto->stock = $producto->stock - $unidades;
          $producto->save();
          return view('layouts.admin.reservas.show')->with('reserva', $reserva)->with('sociedad', $sociedad)->with('factura', $factura)->with('mesas', $mesas);
      }
  }

  function lineaEdit($id)
  {
      $user = Auth::user();
      $sociedad = Sociedad::where('administrador_id', $user->id)->first();
      $linea = Linea::find($id);
      $factura = $linea->factura;
      $productos = ProductoSociedad::where('sociedad_id', $sociedad->id)->get();
      return view('layouts.admin.lineas.update')->with('sociedad', $sociedad)->with('linea', $linea)->with('productos', $productos);
  }

  function lineaUpdate(Request $request)
  {
      $user = Auth::user();
      $sociedad = Sociedad::where('administrador_id', $user->id)->first();
      $linea = Linea::find($request->linea);
      $unidades = $request->unidades;
      $importeAnterior = $linea->importe;
      $producto = ProductoSociedad::find($request->producto);
      $importeActual = $producto->precio * $unidades;
      $linea->importe = $producto->precio * $unidades;
      $unidadAnterior = $linea->unidades;
      $diferenciaUnidades = $unidadAnterior - $unidades;
      $linea->unidades = $unidades;
      $producto->stock =  $producto->stock + $diferenciaUnidades;
      $diferenciaImporte = $importeActual - $importeAnterior;
      $producto->save();
      $linea->producto_sociedad_id = $request->producto;
      $linea->save();

      $Factura = Factura::find($linea->factura->id);
      $Factura->importe = $Factura->importe + $diferenciaImporte;
      $Factura->save();

      $reserva = Reserva::find($Factura->reserva->id);
      $mesaReserva = MesaReserva::where('reserva_id', $reserva->id)->get();
      $mesas = Mesa::whereIn('id', $mesaReserva)->get();

      return view('layouts.admin.reservas.show')->with('reserva', $reserva)->with('sociedad', $sociedad)->with('factura', $Factura)->with('mesas', $mesas);
  }

  function lineaDelete($id)
  {
      $linea = Linea::find($id);
      $factura = Factura::find($linea->factura_id);
      $importe_nuevo = $factura->importe - $linea->importe;
      $producto = ProductoSociedad::find($linea->producto_sociedad_id);
      $producto->stock = $producto->stock + $linea->unidades;
      $producto->save();
      $factura->importe = $importe_nuevo;
      $factura->save();
      $linea->delete();
      $link = '/admin/reservaShow/' . $factura->reserva->id;
      return redirect($link);
  }
}
