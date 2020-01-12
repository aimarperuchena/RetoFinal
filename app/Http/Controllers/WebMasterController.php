<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\ID;
use App\Http\Requests\UserRequest;
use App\Producto;
use App\Sociedad;
use App\UsuarioSociedad;
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
    $soci = sociedad::all();

    return view('layouts.webmaster.sociedades.index')->with('soci',$soci);

}

public function sociTrashed()
    {
        $soci = sociedad::onlyTrashed()->get();

        return view('layouts.webmaster.sociedades.trashed')->with('soci',$soci);

    }

    public function sociRestore($id)
    {
        sociedad::withTrashed()->find($id)->restore();


        return redirect('/webmaster/sociTrashed');

    }

    public function sociDestroy($id)
{
    $soci = sociedad::find($id);
    $soci->delete();

    return redirect('/webmaster/sociIndex');

}

public function socioIndex()
{
    $socios = UsuarioSociedad::all();
    return view('layouts.webmaster.socios.index')->with('socios',$socios);


}


}

