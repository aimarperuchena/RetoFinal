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
  public function index($factura_id)
  {
    $user = Auth::user();
    $factura = Factura::find($factura_id);
   
    $reserva = Reserva::where('id', $factura->reserva_id)->where('usuario_id', $user->id)->first();
    $sociedad = Sociedad::find($factura->sociedad_id);
    if (isset($reserva)) {
      if($reserva->usuario_id===$user->id){
        return view('layouts.user.Lineas.show')->with('factura', $factura)->with('sociedad', $sociedad)->with('user', $user)->with('reserva', $reserva);

      }else{
        return redirect('/denegado');
      }
    } else {
      return redirect('/denegado');
    }
  }

  public function create($factura_id)
  {
    $factura = Factura::find($factura_id);
    $sociedad = Sociedad::find($factura->sociedad_id);
    $productos = ProductoSociedad::where('sociedad_id', $sociedad->id)->get();
    return view('layouts.user.Lineas.create')->with('sociedad', $sociedad)->with('factura', $factura)->with('productos', $productos);
  }

  public function store(Request $request)
  {

    $user = Auth::user();
    $factura = Factura::find($request->factura);
    $reserva = Reserva::find($factura->reserva_id);
    $sociedad = Sociedad::find($factura->sociedad_id);
    $productos = ProductoSociedad::where('sociedad_id', $sociedad->id)->get();
    $productoSelecionado = ProductoSociedad::find($request->producto);
    $unidades = $request->unidades;
    $stock = $productoSelecionado->stock;
    if ($unidades > $stock) {
      $error = "El Producto " . $productoSelecionado->producto->nombre . " solo tiene " . $productoSelecionado->stock . " unidades en stock";
      return view('layouts.user.Lineas.create')->with('sociedad', $sociedad)->with('factura', $factura)->with('productos', $productos)->with('error', $error);
    } else {
      $linea = new Linea();
      $linea->producto_sociedad_id = $productoSelecionado->producto_id;
      $linea->unidades = $unidades;
      $linea->sociedad_id = $sociedad->id;
      $linea->factura_id = $factura->id;
      $linea->importe = $unidades * $productoSelecionado->precio;
      $linea->save();

      $productoSelecionado->stock = $productoSelecionado->stock - $unidades;
      $productoSelecionado->save();
      $factura->importe = $factura->importe + $linea->importe;
      $factura->save();
      return view('layouts.user.Lineas.show')->with('factura', $factura)->with('sociedad', $sociedad)->with('user', $user)->with('reserva', $reserva);
    }
  }

  public function delete($linea_id)
  {

    $user = Auth::user();
    $linea = Linea::find($linea_id);
    $factura = Factura::find($linea->factura_id);
    $sociedad = Sociedad::find($factura->sociedad_id);
    $reserva = Reserva::find($factura->reserva_id);

    if($reserva->usuario_id===$user->id){
      $importe_nuevo = $factura->importe - $linea->importe;
      $producto = ProductoSociedad::find($linea->producto_sociedad_id);
      $producto->stock = $producto->stock + $linea->unidades;
      $producto->save();
      $factura->importe = $importe_nuevo;
      $factura->save();
      $linea->delete();
      return view('layouts.user.Lineas.show')->with('factura', $factura)->with('sociedad', $sociedad)->with('user', $user)->with('reserva', $reserva);
    }else{
      return redirect('/denegado');

    }
   
  }


  public function edit($linea_id)
  {
    $user = Auth::user();

    $linea = Linea::find($linea_id);
    $factura = Factura::find($linea->factura_id);
    $sociedad = Sociedad::find($factura->sociedad_id);
    $factura = $linea->factura;
    $reserva = Reserva::find($factura->reserva_id);
    if($reserva->usuario_id===$user->id){
      $productos = ProductoSociedad::where('sociedad_id', $sociedad->id)->get();
      return view('layouts.user.Lineas.update')->with('sociedad', $sociedad)->with('linea', $linea)->with('productos', $productos)->with('factura', $factura);
  
    }else{
      return redirect('/denegado');

    }
  }

  public function update(Request $request)
  {
    $linea = Linea::find($request->linea);
    $producto = ProductoSociedad::find($request->producto);
    $unidades = $request->unidades;
    $user = Auth::user();
    $reserva=Reserva::find($linea->factura->reserva->id);
    $sociedad = Sociedad::find($reserva->sociedad_id);
    $factura=Factura::find($linea->factura->id);
    $productos = ProductoSociedad::where('sociedad_id', $sociedad->id)->get();
    if ($unidades > $producto->stock) {
      $error = "El Producto " . $producto->producto->nombre . " solo tiene " . $producto->stock . " unidades en stock";
      return view('layouts.user.Lineas.create')->with('sociedad', $sociedad)->with('factura', $factura)->with('productos', $productos)->with('error', $error);

    }else{

    
    
  
    
   
    $importeAnterior = $linea->importe;
    
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
    return view('layouts.user.Lineas.show')->with('factura', $factura)->with('sociedad', $sociedad)->with('user', $user)->with('reserva', $reserva);
    }
  }
}
