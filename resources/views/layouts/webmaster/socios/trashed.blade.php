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
                <th>Habilitar</th>

            </tr>
        </thead>
        <tbody>
            @foreach($socios as $socio)
                <tr>
                    <td>{!! $socio->id !!}</td>
                    <td>{!! $socio->nombre !!}</td>
                    <td>{!! $socio->apellido !!}</td>
                    <td>{!! $socio->telefono !!}</td>
                    <td>{!! $socio->email !!}</td>
                    <td><a href="/webmaster/socioRestore/{{$socio->id}}"><i class="fa fa-check-circle" style="color:black"></i></a></td>

                </tr>
            @endforeach


        </tbody>
    </table>
  </div>
</div>
@endsection

