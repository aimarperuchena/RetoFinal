<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\UsuarioSociedad;
use App\User;


class ProfileController extends Controller
{
  public function profile(){
    $user = Auth::user();
    $suscripciones = UsuarioSociedad::where('user_id',$user->id)->whereNull('deleted_at')->get();
    $sociedadSocio=UsuarioSociedad::where('user_id',$user->id)->get();
    $sociedades=Sociedad::all();
    return view('layouts.user.Perfil.usuarioPerfil')->with('user', $user)->with('suscripciones' , $suscripciones)->with('sociedadSocio',$sociedadSocio)->with('sociedades',$sociedades);
  }
  public function deleteSuscripcion($id){
    $user = Auth::user();
    $suscripcion = UsuarioSociedad::where('sociedad_id',$id)->where('user_id',$user->id)->first();
    $suscripcion -> delete();
    return redirect('/perfil');
  }
  public function update(Request $request){
    $user = Auth::user();
    $newUser = User::find($user->id);
    $newUser->nombre = $request->nombre;
    $newUser->apellido = $request->apellido;
    $newUser->telefono = $request->telefono;
    $newUser->email = $request->email;
    $newUser->password = $request->password;
    $newUser->save();
    return redirect('/perfil');
  }
}
