<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SociedadController extends Controller
{
  public function info()
  {
      return view('layouts.user.SociedadViews.info.infoSociedadView');
  }
  public function reserva()
  {
      return view('layouts.user.SociedadViews.reserva.reservaView');
  }
}
