@extends('layouts.webmaster.WMView')

@section('webmasterContent')
<!-- Content Row -->
<br>
<div class="row">
  <div class="col-xl-12 col-lg-7">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Ubicacion</th>
                <th>Telefono</th>
                <th>Estado</th>
                <th>Fecha solicitada</th>
                <th>Denegar</th>
                <th>Aceptar</th>

            </tr>
        </thead>
        <tbody>
            @foreach($soci as $sociedad)
                <tr>
                    <td>{!! $sociedad->id !!}</td>
                    <td>{!! $sociedad->nombre !!}</td>
                    <td>{!! $sociedad->ubicacion !!}</td>
                    <td>{!! $sociedad->telefono !!}</td>
                    <td>{!! $sociedad->estado !!}</td>
                    <td>{!! $sociedad->created_at !!}</td>
                    <td><a href="/webmaster/peticionDenegar/{{$sociedad->id}}"><i class="fa fa-ban" style="color:black"></i></a></td>
                    <td><a href="/webmaster/peticionAceptar/{{$sociedad->id}}"><i class="fa fa-check-circle" style="color:black"></i></a></td>

                </tr>
            @endforeach
        </tbody>
    </table>
  </div>
</div>
@endsection
