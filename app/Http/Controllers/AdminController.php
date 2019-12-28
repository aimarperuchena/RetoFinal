<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\ProductoSociedad;
use App\Sociedad;
use Illuminate\Http\Request;
use App\User;
use App\UsuarioSociedad;
use Auth;
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

    public function productEdit($id){
        $producto=ProductoSociedad::find($id);
        return view('layouts.admin.product_update')->with('producto',$producto);
    }

    public function productUpdate(Request $request){
        $producto=ProductoSociedad::find($request->id);
        $producto->stock=$request->stock;
        $producto->precio=$request->precio;
        $producto->save();
        return redirect(route('admin.index'));
    }


}
