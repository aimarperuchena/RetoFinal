<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;

class UserController extends Controller
{
    public function update(UserRequest $request){
        $validated = $request->validated();
      
        $user= User::find($request->id);
        $user->email= $request->email;
        $user->name=$request->name;
        $user->password=encrypt($request->password);
        $user->save();
        return redirect('menu');
    }
}
