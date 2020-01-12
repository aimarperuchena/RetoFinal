@extends('layouts.webmaster.WMView')

@section('webmasterContent')
<!-- Content Row -->

<div class="row">
  <div class="col-xl-12 col-lg-7">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Administrador</th>
                <th>Nombre</th>
                <th>Ubicacion</th>
                <th>Telefono</th>
                <!-- <th>Descripcion</th> -->
                <th>Deshabilitar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($soci as $sociedad)
                <tr>
                    <td>{!! $sociedad->id !!}</td>
                    <td>{!! $sociedad->administrador_id !!}</td>
                    <td>{!! $sociedad->nombre !!}</td>
                    <td>{!! $sociedad->ubicacion !!}</td>
                    <td>{!! $sociedad->telefono !!}</td>
                    <!-- <td>{!! $sociedad->descripcion !!}</td> -->
                    <td><a href="/webmaster/sociDestroy/{{$sociedad->id}}"><i class="fa fa-toggle-off" style="color:black"></i></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
  </div>
</div>
@endsection

