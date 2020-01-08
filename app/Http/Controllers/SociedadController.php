<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sociedad;
use App\Mesa;

class SociedadController extends Controller
{
  public function info($id)
  {
    $sociedad = Sociedad::find($id);
    return view('layouts.user.SociedadViews.info.infoSociedadView') -> with('sociedad', $sociedad);
  }
  public function reserva($id)
  {
    $sociedad = Sociedad::find($id);
    $numMesa = Mesa::where('sociedad_id',$id)->get();
    return view('layouts.user.SociedadViews.reserva.reservaView') -> with('mesas', $numMesa);
  }
}
