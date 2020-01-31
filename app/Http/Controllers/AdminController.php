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
use App\Http\Requests\admin_reserva_create;
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

        $socios = DB::select('select * from users where id in(select user_id from sociedad_user where sociedad_id=' . $sociedad->id . ' and deleted_at is null)');
        return view('layouts.admin.usuarios.index')->with('sociedad', $sociedad)->with('socios', $socios);
    }

    public function userDelete($id)
    {
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        $userDelete = UsuarioSociedad::where('sociedad_id', $sociedad->id)->where('user_id', $id)->first();

        $userDelete->delete();
        return redirect('/admin/userIndex');
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
        $link = '/admin/productoIndex';

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
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        $producto = ProductoSociedad::find($id);
        $lineas = Linea::where('producto_sociedad_id', $producto->id)->count();
        if ($lineas == 0) {
            $producto->delete();
            return view('layouts.admin.productos.index')->with('sociedad', $sociedad);
        } else {
            $error = "El articulo " . $producto->producto->nombre . " tiene lineas";
            return view('layouts.admin.productos.index')->with('sociedad', $sociedad)->with('error', $error);
        }
    }

    public function incidenciaIndex()
    {
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        $incidencias = Incidencia::where('sociedad_id', $sociedad->id)->where('estado', 'pendiente')->get();
        $tipo = 1;
        return view('layouts.admin.incidencias.index')->with('sociedad', $sociedad)->with('incidencias', $incidencias)->with('tipo', $tipo);
    }
    public function incidenciaIndexFiltro(Request $request)
    {
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();

        $estado='';
       
        if ($request->estado == 1) {
           $estado="pendiente"; 
           $incidencias=Incidencia::where('sociedad_id',$sociedad->id)->where('estado',$estado)->get();
           $tipo=1;
           return view('layouts.admin.incidencias.index')->with('sociedad', $sociedad)->with('incidencias', $incidencias)->with('tipo', $tipo);

        }
        else  {
            $estado="solucionado";
            $tipo = 2;
            $incidencias=Incidencia::where('sociedad_id',$sociedad->id)->where('estado',$estado)->get();
            return view('layouts.admin.incidencias.index')->with('sociedad', $sociedad)->with('incidencias', $incidencias)->with('tipo', $tipo);

        }

       


      
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

        return redirect('/admin/incidenciaIndex');
    }

    public function incidenciaDestroy($id)
    {
        $incidencia = Incidencia::find($id);
        $incidencia->delete();
        return redirect('/admin/incidenciaIndex');
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
        return redirect('/admin/incidenciaIndex');
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

        return redirect('/admin/mesaIndex');
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
        return redirect('/admin/mesaIndex');
    }

    public function mesaDestroy($id)
    {
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        $mesa = Mesa::find($id);
        if ($mesa->sociedad_id == $sociedad->id) {
            $mesa_reserva = MesaReserva::where('mesa_id', $mesa->id)->count();
            if ($mesa_reserva == 0) {
                $mesa->delete();
                return redirect('/admin/mesaIndex');
            } else {
                $error = "La mesa " . $mesa->nombre . " existe en reservas";
                return view('layouts.admin.mesas.index')->with('sociedad', $sociedad)->with('error', $error);
            }
        } else {
            return redirect('/denegado');
        }
    }


    public function reservaIndex()
    {
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        $reservas = Reserva::where('fecha', '>=', date('Y-m-d'))->where('sociedad_id', $sociedad->id)->get();
        $tipo = 1;
        return view('layouts.admin.reservas.index')->with('sociedad', $sociedad)->with('reservas', $reservas)->with('tipo', $tipo);
    }

    public function reservaIndexFiltro(Request $request)
    {
        $reservas = null;
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        if ($request->tipo == 1) {
            $reservas = Reserva::where('fecha', '>=', date('Y-m-d'))->where('sociedad_id', $sociedad->id)->get();
        } else {
            $reservas = Reserva::where('fecha', '<', date('Y-m-d'))->where('sociedad_id', $sociedad->id)->get();
        }
        $tipo = $request->tipo;
        return view('layouts.admin.reservas.index')->with('sociedad', $sociedad)->with('reservas', $reservas)->with('tipo', $tipo);
    }
    public function reservaShow($id)
    {
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        $reserva = Reserva::find($id);
        $mesaReserva=MesaReserva::where('reserva_id',$reserva->id)->get();
        $mesas = Mesa::whereIn('id', $mesaReserva)->get();
        $factura = Factura::where('reserva_id', $id)->first();
        return view('layouts.admin.reservas.show')->with('reserva', $reserva)->with('sociedad', $sociedad)->with('factura', $factura)->with('mesas',$mesas);
    }

    public function reservaEdit($id)
    {
        $reserva = Reserva::find($id);
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        $tipo = TipoReserva::all();
        $socios = DB::select('select * from users where id in(select user_id from sociedad_user where sociedad_id=' . $sociedad->id . ' and deleted_at is null)');

        return view('layouts.admin.reservas.update')->with('reserva', $reserva)->with('sociedad', $sociedad)->with('tipo', $tipo)->with('socios', $socios);
    }

    public function reservaUpdate(Request $request)
    {
        $reserva = Reserva::find($request->id);

        $reserva->usuario_id = $request->usuario;
        $reserva->tipo_id = $request->tipo;
        $reserva->fecha = $request->fecha;
        $reserva->personas = $request->personas;

        $reserva->save();
        return redirect('/admin/reservaIndex');
    }

    public function reservaDelete($id)
    {
        $user = Auth::user();
        $reserva = Reserva::find($id);
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        if ($reserva->sociedad_id == $sociedad->id) {
            $mesaReserva = MesaReserva::where('reserva_id', $id);
            $mesaReserva->delete();

            $reserva->delete();
            return redirect('/admin/reservaIndex');
        } else {
            return redirect('/denegado');
        }
    }

    public function reservaCreate()
    {
        $user = Auth::user();
        $todosTipos = TipoReserva::all();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        $sociedadUsuario = UsuarioSociedad::where('sociedad_id', $sociedad->id)->where('deleted_at', null)->get();
        $socios = DB::select('select * from users where id in(select user_id from sociedad_user where sociedad_id=' . $sociedad->id . ' and deleted_at is null)');

        return view('layouts.admin.reservas.create')->with('sociedad', $sociedad)->with('todosTipos', $todosTipos)->with('socios', $socios);
    }

    public function reservaFechaFind(admin_reserva_create $request)
    {
        $validated = $request->validated();
        $user = Auth::user();
        $tipos = TipoReserva::all();

        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        $reserva = new Reserva();
        $reserva->fecha = $request->fecha;
        $reserva->usuario_id = $request->usuario;
        $reserva->sociedad_id = $sociedad->id;
        $reserva->personas = $request->personas;
        $reserva->tipo_id = $request->tipo;
        $socios = DB::select('select * from users where id in(select user_id from sociedad_user where sociedad_id=' . $sociedad->id . ' and deleted_at is null)');
        $fecha=date('Y/m/d', strtotime($request->fecha));
  
        $reservas = Reserva::where('fecha', $fecha)->where('tipo_id', $request->tipo)->where('sociedad_id', $sociedad->id)->get();
      
        $mesa_reservas = MesaReserva::whereIn('reserva_id', $reservas)->get();
        $mesasOcupadas = Mesa::whereIn('id', $mesa_reservas)->get();
        $mesasLibres = Mesa::whereNotIn('id', $mesasOcupadas)->where('sociedad_id', $sociedad)->get();
        $contador = Mesa::whereNotIn('id', $mesasOcupadas)->where('sociedad_id', $sociedad)->count();
        if($contador===0){
            $mesasLibres=Mesa::where('sociedad_id',$sociedad->id)->get();
        }
      echo $contador;
        return view('layouts.admin.reservas.create')->with('sociedad', $sociedad)->with('tipo', $request->tipo)->with('todosTipos',$tipos)->with('socios', $socios)->with('mesas', $mesasLibres)->with('fecha',$fecha)->with("personas",$request->personas)->with('usuario',$request->usuario);
    }


    public function reservaStore(Request $request){
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();

       
        $usuario=$request->usuario;
        $tipo=$request->tipo;
        $personas=$request->personas;

        $reserva = new Reserva();
        $reserva->fecha = $request->fecha;
        $reserva->usuario_id = $usuario;
        $reserva->sociedad_id = $sociedad->id;
        $reserva->personas = $personas;
        $reserva->tipo_id = $tipo;
        $reserva->save();

        $reservaCreada=Reserva::where('sociedad_id',$sociedad->id)->where('usuario_id',$usuario)->first()->orderBy('id', 'DESC')->first();
        $mesa_reserva=$request->mesa;
        $mesaReserva=new MesaReserva();
        $mesaReserva->mesa_id=$mesa_reserva;
        $mesaReserva->reserva_id=$reservaCreada->id;
        $mesaReserva->save();
        return redirect('/admin/reservaIndex');


   
    }

    public function lineaAdd($id)
    {
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        $productos = ProductoSociedad::where('sociedad_id', $sociedad->id)->get();
$factura=Factura::find($id);
        return view('layouts.admin.lineas.create')->with('sociedad', $sociedad)->with('productos', $productos)->with('factura', $factura);
    }

    public function lineaCreate(Request $request)
    {

        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        $productos = ProductoSociedad::where('sociedad_id', $sociedad->id)->get();
        $factura = Factura::find($request->factura)->first();
        $reserva = Reserva::find($factura->reserva_id);
        $mesaReserva=MesaReserva::where('reserva_id',$reserva->id)->get();
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
            $producto=ProductoSociedad::find($linea->producto_sociedad_id);
            $producto->stock=$producto->stock-$unidades;
            $producto->save();
            return view('layouts.admin.reservas.show')->with('reserva', $reserva)->with('sociedad', $sociedad)->with('factura', $factura)->with('mesas',$mesas);
        }
    }

    function lineaEdit($id){
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        $linea=Linea::find($id);
        $factura=$linea->factura;
        $productos = ProductoSociedad::where('sociedad_id', $sociedad->id)->get();
        return view('layouts.admin.lineas.update')->with('sociedad',$sociedad)->with('linea',$linea)->with('productos',$productos);
    }

    function lineaUpdate(Request $request){
        $linea=Linea::find($request->linea);
        $unidades=$request->unidades;
  
        $producto=Producto::find($request->producto);
        $linea->importe=$producto->precio*$unidades;
        $unidadAnterior=$linea->unidades;
        $diferencia=$unidadAnterior-$unidades;
        
        $linea->producto_sociedad_id=$request->producto;
        $linea->save();
        


    }
    function facturaShow($id)
    {
        $user = Auth::user();
        $sociedad = Sociedad::where('administrador_id', $user->id)->first();
        $factura = Factura::find($id);
        $productoSociedad = ProductoSociedad::where('sociedad_id', $sociedad->id)->get();
        $productoGenerico = Producto::all();
        return view('layouts.admin.facturas.show')->with('factura', $factura)->with('sociedad', $sociedad)->with('productoSociedad', $productoSociedad)->with('productoGenerico', $productoGenerico);
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
    function lineaDelete($id)
    {
        $linea = Linea::find($id);
        $factura = Factura::find($linea->factura_id);
        $importe_nuevo = $factura->importe - $linea->importe;

        $factura->importe = $importe_nuevo;
        $factura->save();
        $linea->delete();
        $link = '/admin/reservaShow/' . $factura->reserva->id;
        return redirect($link);
    }
}
