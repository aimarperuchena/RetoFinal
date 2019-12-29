<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Producto;
use App\ProductoSociedad;
use App\Sociedad;
use Illuminate\Http\Request;
use App\User;
use App\UsuarioSociedad;
use Auth;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function __construct()
    {
     $this->middleware('role:2'); 
    }
    public function index()
    {
        $user=Auth::user();
        $sociedad=Sociedad::where('administrador_id',$user->id)->first();
     
        return view('layouts.admin.home')->with('sociedad',$sociedad);
    }



    public function productCreate(){
       $productos=Producto::all();
       return view('layouts.admin.product_create')->with('productos',$productos);
    }

    public function productStore(Request $request){
        $user=Auth::user();
        $sociedad=Sociedad::where('administrador_id',$user->id)->first();
        $contador=ProductoSociedad::where('sociedad_id',$sociedad->id)->where('producto_id',$request->id)->count();
        $existe=DB::table('productos_sociedad')->where('sociedad_id', $sociedad->id)->where('producto_id',$request->id)->exists();
        $link='/admin';
       
        /* if($existe==false){
            $producto=new ProductoSociedad();
            $producto->producto_id=$request->producto;
            $producto->sociedad_id=$sociedad->id;
            $producto->stock=$request->stock;
            $producto->precio=$request->precio;
            $producto->save();
            $link='/admin';
        } */
        return redirect($link)->with('contador',$contador);
        

    }
    public function productEdit($id){
        $producto=ProductoSociedad::find($id);
        return view('layouts.admin.product_update')->with('producto',$producto);
    }

    public function productUpdate(Request $request){
        $producto=ProductoSociedad::find($request->id);
        $producto->stock=$request->stock;
        $producto->precio=$request->precio;
        $producto->save();
        return redirect('/admin');
    }

    public function productDestroy($id){
        $producto= ProductoSociedad::find($id);
        $producto->delete();

        return redirect('/admin');
    }


}
