<?php

namespace App\Http\Controllers;
use App\Access;
use Illuminate\Http\Request;
use Illuminate\Http\ID;
use App\Http\Requests\UserRequest;
use App\Producto;
use App\Sociedad;
use Illuminate\Support\Carbon;
use App\UsuarioSociedad;
use App\PeticionNuevaSociedad;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductoRequest;
use producto_seeder;

class WebMasterController extends Controller
{
   public function __construct()
{
 $this->middleware('role:1');
}
    public function index(){

        $productos = producto::count();
        $socios = User::count();
        $sociedades = Sociedad::count();
        $usuarios=Access::whereDate('created_at', '=', Carbon::now()->format('Y-m-d'))->count();

        return view('layouts.webmaster.panel')->with('productos',$productos)->with('socios',$socios)->with('sociedades',$sociedades)->with('usuarios',$usuarios);


    }

    public function productoIndex(Request $request)
    {

        $productos = Producto::all();

        return view('layouts.webmaster.productos.index',compact('productos'));

    }

     public function productCreate()
    {
        return view('layouts.webmaster.productos.create');
    }

    public function productStore(ProductoRequest $request)
    {
        $validated = $request->validated();
        $producto = new Producto;
        $producto->nombre=$request->input('nombre');
        $producto->descripcion=$request->input('descripcion');
        $producto->save();

        return redirect('/webmaster/productoIndex');

    }
    public function productEdit($id)
    {
        $producto = Producto::find($id);
        return view('layouts.webmaster.productos.update')->with('producto', $producto);
    }
    public function productUpdate(ProductoRequest $request, $id)
    {
        $validated = $request->validated();
        $producto = Producto::find($request->id);
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->save();

        return redirect('/webmaster/productoIndex');

    }

    public function sociIndex(Request $request)
    {
        $soci = Sociedad::withTrashed()->get();

        return view('layouts.webmaster.sociedades.index',compact('soci'));

    }

    public function sociRestore($id)
    {
        Sociedad::withTrashed()->find($id)->restore();


        return redirect('/webmaster/sociIndex');

    }

        public function sociDestroy($id)
    {
        $soci = Sociedad::find($id);
        $soci->delete();

        return redirect('/webmaster/sociIndex');

    }


    public function sociPeticion()
    {
        $soci = PeticionNuevaSociedad::withTrashed()->where('estado','pendiente')->get();

        return view('layouts.webmaster.sociedades.peticion')->with('soci',$soci);

    }

    public function peticionAceptar($id)
        {

        $soci = PeticionNuevaSociedad::find($id);
        $soci->estado = "aceptado";
        $soci->save();

        $sociedad_user = new Sociedad();
        $sociedad_user->nombre = $soci->nombre;
        $sociedad_user->ubicacion = $soci->ubicacion;
        $sociedad_user->telefono = $soci->telefono;
        $sociedad_user->descripcion = $soci->descripcion;
        $sociedad_user->link_plano = $soci->link_plano;
        $sociedad_user->administrador_id = $soci->user_id;
        $sociedad_user->save();

        $id_usuario=$soci->user_id;

        $soci = User::find($id_usuario);
        $soci->role_id = 2;
        $soci->save();

        $soci = PeticionNuevaSociedad::find($id);
        $soci->delete();


        return redirect('/webmaster/sociPeticion');
    }

    public function peticionDenegar($id)
    {

        $soci = PeticionNuevaSociedad::find($id);
        $soci->estado = "denegado";
        $soci->save();

        $soci = PeticionNuevaSociedad::find($id);
        $soci->delete();


        return redirect('/webmaster/sociPeticion');
    }

    public function peticionRestore($id)
    {
        $soci = PeticionNuevaSociedad::find($id);
        $soci->estado = "aceptado";
        $soci->save();

        //PeticionNuevaSociedad::withTrashed()->find($id)->restore();

        return redirect('/webmaster/sociPeticion');

    }

        public function peticionDestroy($id)
    {
        $soci = PeticionNuevaSociedad::find($id);
        $soci->estado = "denegado";
        $soci->save();

        //$soci = PeticionNuevaSociedad::find($id);
       // $soci->delete();

        return redirect('/webmaster/sociPeticion');

    }

    public function peticionFiltrado(Request $request)
    {
        $estado='';

        if ($request->estado == 1) {
           $estado="denegado";
           $soci=PeticionNuevaSociedad::withTrashed()->where('estado',$estado)->get();
           $tipo=1;
           return view('layouts.webmaster.sociedades.peticion')->with('tipo', $tipo)->with('estado', $estado)->with('soci', $soci);
        }
        else  {
            $estado="aceptado";
            $soci=PeticionNuevaSociedad::withTrashed()->where('estado',$estado)->get();
           $tipo=2;
           return view('layouts.webmaster.sociedades.peticion')->with('tipo', $tipo)->with('estado', $estado)->with('soci', $soci);
        }
    }

    public function socioIndex(Request $request)
    {

        $socios = User::withTrashed()->where('role_id', '3')->get();


        return view('layouts.webmaster.socios.index',compact('socios'));

    }

    public function socioRestore($id)
    {
        User::withTrashed()->find($id)->restore();


        return redirect('/webmaster/socioIndex');

    }

        public function socioDestroy($id)
    {
        $socios = User::find($id);
        $socios->delete();

        return redirect('/webmaster/socioIndex');

    }

}
