<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
     $this->middleware('role:2'); 
    }
    public function index()
    {
        return view('layouts.admin.home');
    }


}
