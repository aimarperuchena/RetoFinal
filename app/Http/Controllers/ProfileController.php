<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\UsuarioSociedad;


class ProfileController extends Controller
{
  public function profile(){
    $user = Auth::user();
    $suscripciones = UsuarioSociedad::where('user_id',$user->id)->whereNull('deleted_at')->get();
    return view('layouts.user.Perfil.usuarioPerfil')-> with('user' , $user)-> with('suscripciones' , $suscripciones);
  }
  public function deleteSuscripcion($id){
    $user = Auth::user();
    $suscripcion = UsuarioSociedad::where('sociedad_id',$id)->where('user_id',$user->id)->first();
    $suscripcion -> delete();
    return redirect('/perfil');
  }
}
