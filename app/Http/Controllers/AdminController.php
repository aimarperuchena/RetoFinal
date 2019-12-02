<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return view('admin')->with('usuarios', $usuarios);
    }


    public function edit($id)
    {
        $usuario = User::find($id);
        return view('edit_user')->with('usuario', $usuario);
    }

    public function update(UserRequest $request)
    {
        $validated = $request->validated();

        User::where('id', $request->id)
         
          ->update([
              'name' => $request->name,
              'email'=>$request->email,
              'password'=>\Hash::make($request->password),
          ]);
          /*
        $user= User::find($request->id);
        $user->email= $request->email;
        $user->name=$request->name;
        $user->password=\Hash::make($request->password);
        $user->save();
        */
        return redirect('menu');
     }


     public function delete($id){
        $usuario= User::find($id);
        $usuario->delete();
        return redirect('menu');
     }
}
