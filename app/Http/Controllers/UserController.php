<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;
use Auth;

class UserController extends Controller
{
    public function __construct()
    {
     $this->middleware('role:3'); 
    }
    public function index(){
        return view('layouts.user.home');
    }
}
