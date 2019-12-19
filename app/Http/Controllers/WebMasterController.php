<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebMasterController extends Controller
{
    public function __construct()
{
 $this->middleware('role:1'); 
}
    public function index(){
        return view('layouts.webmaster.home');
    }
}
