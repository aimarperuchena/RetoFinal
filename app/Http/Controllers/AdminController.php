<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
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


}
