<?php

namespace App\Http\Controllers\Auth;

use App\Access;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\User;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function redirectTo()
    {
        $user=Auth::user();

        if($user->role_id == 1){

        $usuario = new Access();
        $usuario->user_id = $user->id;
        $usuario->save();

        return '/webmaster';

        }
        if($user->role_id == 2){

            $usuario = new Access();
            $usuario->user_id = $user->id;
            $usuario->save();

            return '/admin';
        }
        if($user->role_id == 3){

            $usuario = new Access();
            $usuario->user_id = $user->id;
            $usuario->save();

            return '/user';
        }

    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');

    }
}
