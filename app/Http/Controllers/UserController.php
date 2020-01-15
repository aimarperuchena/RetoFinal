<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;
use Auth;
use App\Mesa;
use App\Sociedad;
use App\UsuarioSociedad;


class UserController extends Controller
{
    public function __construct()
    {
     $this->middleware('role:3');
    }
    public function index(){
      $sociedades = Sociedad::all();
      $todos = true;
      return view('layouts.user.home')-> with('sociedades' , $sociedades)-> with('todos' , $todos);
    }
    public function suscripciones(){
      $user = Auth::user();
      $sociedades = Sociedad::all();
      $usuarioSociead = UsuarioSociedad::where('user_id', $user->id)->get();
      foreach ($usuarioSociead as $soci) {
        $suscripciones []= Sociedad::find($soci->sociedad_id);
      }
      $todos = false;
      return view('layouts.user.home')-> with('suscripciones' , $suscripciones)-> with('sociedades' , $sociedades)-> with('todos' , $todos);
    }

}
