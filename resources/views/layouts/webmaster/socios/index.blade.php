@extends('layouts.webmaster.WMView')

@section('webmasterContent')
<!-- Content Row -->

<div class="row">
  <div class="col-xl-12 col-lg-7">
    <table class="table">
        <thead>
            <tr>
                <th>ID Usuario</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Suspender</th>

            </tr>
        </thead>
        <tbody>
            @foreach($socios as $socio)
                <tr>
                    <td>{!! $socio->usuario->id !!}</td>
                    <td>{!! $socio->usuario->nombre !!}</td>
                    <td>{!! $socio->usuario->apellido !!}</td>
                    <td>{!! $socio->usuario->telefono !!}</td>
                    <td>{!! $socio->usuario->email !!}</td>
                    <td><a href="/webmaster/socioDestroy/{{$socio->usuario->id}}"><i class="fa fa-toggle-off" style="color:black"></i></a></td>

                </tr>
            @endforeach


        </tbody>
    </table>
  </div>
</div>
@endsection


