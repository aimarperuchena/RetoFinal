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
use App\Http\Requests\SociedadUpdateRequest;
use App\Mesa;
use App\Reserva;
use App\Factura;
use App\Linea;
use App\PeticionSociedad;
use App\TipoReserva;
use App\MesaReserva;

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

        return view('layouts.admin.inicio')->with('sociedad', $sociedad);
    }

    public function sociedadEdit()
    {
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();

        return view('layouts.admin.sociedad.update')->with('sociedad', $sociedad);
    }

    public function sociedadUpdate(SociedadUpdateRequest $request)
    {
        $validated = $request->validated();
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        $sociedadUpdate = Sociedad::find($sociedad->id);

        $sociedadUpdate->nombre = $request->nombre;
        $sociedadUpdate->telefono = $request->telefono;
        $sociedadUpdate->ubicacion = $request->ubicacion;
        $sociedadUpdate->save();

        return redirect('/admin');
    }


    public function userIndex()
    {
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        return view('layouts.admin.usuarios.index')->with('sociedad', $sociedad);
    }

    public function productoIndex()
    {
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        return view('layouts.admin.productos.index')->with('sociedad', $sociedad);
    }
    public function productCreate()
    {
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        $productos = DB::table('producto')
            ->whereNotIn('id', DB::table('productos_sociedad')->where('sociedad_id', $sociedad->id)->pluck('producto_id'))

            ->get();



        return view('layouts.admin.productos.create')->with('productos', $productos)->with('sociedad', $sociedad);
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
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        $producto = ProductoSociedad::find($id);
        return view('layouts.admin.productos.update')->with('producto', $producto)->with('sociedad', $sociedad);
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

    public function incidenciaIndex()
    {
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        $incidencias=Incidencia::where('sociedad_id',$sociedad->id)->where('estado','pendiente')->get();
        $tipo=1;
        return view('layouts.admin.incidencias.index')->with('sociedad', $sociedad)->with('incidencias',$incidencias)->with('tipo',$tipo);
    }
    public function incidenciaIndexFiltro(Request $request)
    {
        if($request->tipo==1){
            $user = Auth::user();
            $sociedad = Sociedad::where('administrador_id', $user->id)->first();
            $incidencias=Incidencia::where('sociedad_id',$sociedad->id)->where('estado','pendiente')->get();
            $tipo=1;
        }
        if($request->tipo==2){
            $user = Auth::user();
            $sociedad = Sociedad::where('administrador_id', $user->id)->first();
            $incidencias=Incidencia::where('sociedad_id',$sociedad->id)->where('estado','solucionado')->get();
            $tipo=2;
        }
       
        return view('layouts.admin.incidencias.index')->with('sociedad', $sociedad)->with('incidencias',$incidencias)->with('tipo',$tipo);
    }

    public function incidenciaCreate()
    {
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        return view('layouts.admin.incidencias.create')->with('sociedad', $sociedad);
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
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        $incidencia = Incidencia::find($id);
        return view('layouts.admin.incidencias.update')->with('incidencia', $incidencia)->with('sociedad', $sociedad);
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

    public function mesaIndex()
    {
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        return view('layouts.admin.mesas.index')->with('sociedad', $sociedad);
    }
    public function mesaCreate()
    {
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        return view('layouts.admin.mesas.create')->with('sociedad', $sociedad);
    }

    public function mesaStore(Request $request)
    {
        /*  $validated = $request->validated(); */
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();

        $mesa = new Mesa();
        $mesa->nombre = $request->nombre;
        $mesa->capacidad = $request->capacidad;
        $mesa->sociedad_id = $sociedad->id;
        $mesa->save();

        return redirect('/admin');
    }

    public function mesaEdit($id)
    {
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        $mesa = Mesa::find($id);
        return view('layouts.admin.mesas.update')->with('mesa', $mesa)->with('sociedad', $sociedad);
    }

    public function mesaUpdate(Request $request)
    {
        /*   $validated = $request->validated(); */

        $mesa = Mesa::find($request->id);
        $mesa->nombre = $request->nombre;

        $mesa->capacidad = $request->capacidad;
        $mesa->save();
        return redirect('/admin');
    }

    public function mesaDestroy($id)
    {
        $mesa = Mesa::find($id);
        $mesa->delete();
        return redirect('/admin');
    }


    public function reservaIndex()
    {
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        $reservas=Reserva::where('fecha', '>=', date('Y-m-d'))->where('sociedad_id',$sociedad->id)->get();
       $tipo=1;
        return view('layouts.admin.reservas.index')->with('sociedad', $sociedad)->with('reservas',$reservas)->with('tipo',$tipo);
    }

    public function reservaIndexFiltro(Request $request){
        $reservas=null;
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        if($request->tipo==1){
            $reservas=Reserva::where('fecha', '>=', date('Y-m-d'))->where('sociedad_id',$sociedad->id)->get();
        }else{
            $reservas=Reserva::where('fecha', '<', date('Y-m-d'))->where('sociedad_id',$sociedad->id)->get();
        }
        $tipo=$request->tipo;
        return view('layouts.admin.reservas.index')->with('sociedad', $sociedad)->with('reservas',$reservas)->with('tipo',$tipo);

    }
    public function reservaShow($id)
    {
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        $reserva = Reserva::find($id);
        return view('layouts.admin.reservas.show')->with('reserva', $reserva)->with('sociedad', $sociedad);
    }
    public function reservaEdit($id)
    {
        $reserva = Reserva::find($id);
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        $tipo = TipoReserva::all();

        return view('layouts.admin.reservas.update')->with('reserva', $reserva)->with('sociedad', $sociedad)->with('tipo',$tipo);
    }

    public function reservaUpdate(Request $request){
        $reserva=Reserva::find($request->id);
        
        $reserva->usuario_id=$request->usuario;
        $reserva->tipo_id=$request->tipo;
        $reserva->fecha=$request->fecha;
        $reserva->personas=$request->personas;

        $reserva->save();
        return redirect('/admin/reservaIndex');
    }

    public function reservaDelete($id){
        $user = Auth::user();
        $reserva=Reserva::find($id);
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        if($reserva->sociedad_id==$sociedad->id){
            $mesaReserva=MesaReserva::where('reserva_id',$id);
            $mesaReserva->delete();
          
            $reserva->delete();
            return redirect('/admin');
        }else{
            return redirect('/denegado');
        }
       
    }
    function facturaShow($id)
    {
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        $factura = Factura::find($id);
        $productoSociedad = ProductoSociedad::where('sociedad_id',$sociedad->id)->get();
        $productoGenerico=Producto::all();
        return view('layouts.admin.facturas.show')->with('factura', $factura)->with('sociedad', $sociedad)->with('productoSociedad',$productoSociedad)->with('productoGenerico',$productoGenerico);
    }


    public function peticionIndex()
    {
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        $peticiones = PeticionSociedad::where('sociedad_id', $sociedad->id)->where('estado', 'pendiente')->get();
        return view('layouts.admin.peticiones.index')->with('peticiones', $peticiones)->with('sociedad', $sociedad);
    }

    public function peticionAceptar($id)
    {
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        $peticion = PeticionSociedad::find($id);
        $peticion->estado = "aceptado";
        $peticion->save();

        $sociedad_user = new UsuarioSociedad();
        $sociedad_user->sociedad_id = $sociedad->id;
        $sociedad_user->user_id = $peticion->usuario_id;
        $sociedad_user->save();
        return redirect('admin');
    }

    public function peticionDenegar($id)
    {

        $peticion = PeticionSociedad::find($id);
        $peticion->estado = "denegado";
        $peticion->save();


        return redirect('admin');
    }
    function lineaDelete($id){
        $linea=Linea::find($id);
        $factura=Factura::find($linea->factura_id);
        $importe_nuevo=$factura->importe-$linea->importe;

        $factura->importe=$importe_nuevo;
        $factura->save();
        $linea->delete();
        $link='/admin/reservaShow/'.$factura->reserva->id;
        return redirect($link);
    }
}
