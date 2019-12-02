<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;
use Auth;

class UserController extends Controller
{
    public function update(UserRequest $request){
        $validated = $request->validated();
      
        $user= User::find($request->id);
        $user->email= $request->email;
        $user->name=$request->name;
        $user->password=\Hash::make($request->password);
        $user->save();
        return redirect('menu');
    }

    public function delete($id){
        Auth::logout();
        $usuario= User::find($id);
        $usuario->delete();
        return redirect('/');
    }
}
