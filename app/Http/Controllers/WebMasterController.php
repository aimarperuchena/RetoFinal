<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Producto;
use App\Sociedad;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductoCreateRequest;
use App\Http\Requests\ProductoUpdateRequest;
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
    //return view('layouts.webmaster.productos.index', compact('productos'));
    return view('layouts.webmaster.productos.index')->with('productos',$productos);

    //return view('layouts.webmaster.productos.index');
}

     public function productCreate()
    {
        return view('layouts.webmaster.productos.create');
    }

    public function productStore(Request $request)
    {
        $producto = new Producto;
        $producto->nombre=$request->input('nombre');
        $producto->descripcion=$request->input('descripcion');
        $producto->save();

        return "completado";

    }
    public function productEdit($id)
    {

        return view('layouts.webmaster.productos.update');
    }

    public function productUpdate(ProductoUpdateRequest $request)
    {

        //return redirect('/admin');
    }

    public function productDestroy($id)
    {

        //return redirect('/admin');
    }

    public function sociIndex()
{
    $soci = sociedad::all();
    //return view('layouts.webmaster.productos.index', compact('productos'));
    return view('layouts.webmaster.sociedades.index')->with('soci',$soci);

    //return view('layouts.webmaster.productos.index');
}

}

