<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\ID;
use App\Http\Requests\UserRequest;
use App\Producto;
use App\Sociedad;
use App\UsuarioSociedad;
use App\PeticionSociedad;
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

    //user()->deleted_at->null
        return view('layouts.webmaster.home');
    }

    public function productoIndex()
    {
        $productos = producto::all();

        return view('layouts.webmaster.productos.index')->with('productos',$productos);

    }

     public function productoTrashed()
    {
        $productos = producto::onlyTrashed()->get();

        return view('layouts.webmaster.productos.trashed')->with('productos',$productos);

    }

    public function productoRestore($id)
    {
        producto::withTrashed()->find($id)->restore();


        return redirect('/webmaster/productoTrashed');

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


    public function productDestroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();

        return redirect('/webmaster/productoIndex');
    }

    public function sociIndex()
{
    $soci = User::where('role_id','2')->get();

    return view('layouts.webmaster.sociedades.index')->with('soci',$soci);

}

public function sociPeticion()
{
    $soci = PeticionSociedad::all();

    return view('layouts.webmaster.sociedades.peticion')->with('soci',$soci);

}

public function sociTrashed()
    {
        $soci = User::onlyTrashed()->get();

        return view('layouts.webmaster.sociedades.trashed')->with('soci',$soci);

    }

    public function sociRestore($id)
    {
        User::withTrashed()->find($id)->restore();


        return redirect('/webmaster/sociTrashed');

    }

    public function sociDestroy($id)
{
    $soci = User::find($id);
    $soci->delete();

    return redirect('/webmaster/sociIndex');

}

public function socioIndex()
{
    $socios = User::where('role_id','3')->get();
    return view('layouts.webmaster.socios.index')->with('socios',$socios);


}

public function socioTrashed()
    {
        $socios = User::onlyTrashed()->get();

        return view('layouts.webmaster.socios.trashed')->with('socios',$socios);

    }

    public function socioRestore($id)
    {
        User::withTrashed()->find($id)->restore();


        return redirect('/webmaster/socioTrashed');

    }

    public function socioDestroy($id)
{
    $socios = User::find($id);
    $socios->delete();

    return redirect('/webmaster/socioIndex');

}

}

