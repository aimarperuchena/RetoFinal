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
                {{-- <th>Ubicacion</th> --}}
                <th>Telefono</th>
                <th>Email</th>
                <th>Alta/Baja</th>
            </tr>
        </thead>
        <tbody>
            @foreach($soci as $sociedad)
                <tr>
                    <td>{!! $sociedad->id !!}</td>
                    <td>{!! $sociedad->nombre !!}</td>
                    {{-- <td>{!! $sociedad->sociedades->ubicacion !!}</td> --}}
                    <td>{!! $sociedad->telefono !!}</td>
                    <td>{!! $sociedad->email !!}</td>
                    <td><a href="/webmaster/sociRestore/{{$sociedad->id}}"><i class="fas fa-thumbs-up" style="color:black"></i></a></td>
                    <td><a href="/webmaster/sociDestroy/{{$sociedad->id}}"><i class="fas fa-thumbs-down" style="color:black"></i></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
  </div>
</div>
@endsection

