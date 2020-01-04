<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Incidencia;
use App\Producto;
use App\ProductoSociedad;
use App\Sociedad;
use Illuminate\Http\Request;
use App\User;
use App\UsuarioSociedad;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductoCreateRequest;
use App\Http\Requests\ProductoUpdateRequest;
use App\Http\Requests\IncidenciaCreateRequest;
use App\Http\Requests\CreateMesaRequest;
use App\Mesa;
use App\Reserva;
use App\Factura;
use App\Linea;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:2');
    }
    public function index()
    {
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();

        return view('layouts.admin.home')->with('sociedad', $sociedad);
    }



    public function productCreate()
    {
        $productos = Producto::all();
        return view('layouts.admin.productos.create')->with('productos', $productos);
    }

    public function productStore(ProductoCreateRequest $request)
    {
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        $contador = ProductoSociedad::where('sociedad_id', $sociedad->id)->where('producto_id', $request->id)->count();
        $existe = DB::table('productos_sociedad')->where('sociedad_id', $sociedad->id)->where('producto_id', $request->id)->exists();
        $link = '/admin';
        $validated = $request->validated();


        $producto = new ProductoSociedad();
        $producto->producto_id = $request->producto;
        $producto->sociedad_id = $sociedad->id;
        $producto->stock = $request->stock;
        $producto->precio = $request->precio;
        $producto->save();
        $link = '/admin';

        return redirect($link)->with('contador', $contador);
    }
    public function productEdit($id)
    {
        $producto = ProductoSociedad::find($id);
        return view('layouts.admin.productos.update')->with('producto', $producto);
    }

    public function productUpdate(ProductoUpdateRequest $request)
    {
        $validated = $request->validated();
        $producto = ProductoSociedad::find($request->id);
        $producto->stock = $request->stock;
        $producto->precio = $request->precio;
        $producto->save();
        return redirect('/admin');
    }

    public function productDestroy($id)
    {
        $producto = ProductoSociedad::find($id);
        $producto->delete();

        return redirect('/admin');
    }


    public function incidenciaCreate()
    {
        return view('layouts.admin.incidencias.create');
    }

    public function incidenciaStore(IncidenciaCreateRequest $request)
    {
        $validated = $request->validated();

        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        $incidencia = new Incidencia();
        $incidencia->sociedad_id = $sociedad->id;
        $incidencia->descripcion = $request->descripcion;
        $incidencia->estado = 'pendiente';
        $incidencia->fecha = date('Y-m-d');
        $incidencia->save();

        return redirect('/admin');
    }

    public function incidenciaDestroy($id)
    {
        $incidencia = Incidencia::find($id);
        $incidencia->delete();
        return redirect('/admin');
    }


    public function incidenciaEdit($id)
    {
        $incidencia = Incidencia::find($id);
        return view('layouts.admin.incidencias.update')->with('incidencia', $incidencia);
    }

    public function incidenciaUpdate(IncidenciaCreateRequest $request)
    {
        $validated = $request->validated();
        $incidencia = Incidencia::find($request->id);
        $incidencia->descripcion = $request->descripcion;
        $incidencia->estado = $request->estado;
        $incidencia->save();
        return redirect('/admin');
    }


    public function mesaCreate()
    {
        return view('layouts.admin.mesas.create');
    }

    public function mesaStore(Request $request)
    {
        /*  $validated = $request->validated(); */
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();

        $mesa = new Mesa();
        $mesa->capacidad = $request->capacidad;
        $mesa->sociedad_id = $sociedad->id;
        $mesa->save();

        return redirect('/admin');
    }

    public function mesaEdit($id)
    {
        $mesa = Mesa::find($id);
        return view('layouts.admin.mesas.update')->with('mesa', $mesa);
    }

    public function mesaUpdate(Request $request)
    {
      /*   $validated = $request->validated(); */

        $mesa = Mesa::find($request->id);
        $mesa->capacidad = $request->capacidad;
        $mesa->save();
        return redirect('/admin');
    }

    public function mesaDestroy($id){
        $mesa=Mesa::find($id);
        $mesa->delete();
        return redirect('/admin');
    }

    public function reservaShow($id){
        $reserva=Reserva::find($id);
        return view('layouts.admin.reservas.show')->with('reserva',$reserva);
    }

    function facturaShow($id){
        $factura=Factura::find($id);
        return view('layouts.admin.facturas.show')->with('factura',$factura);
    }
}
