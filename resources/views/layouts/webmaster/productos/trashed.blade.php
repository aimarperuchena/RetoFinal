@extends('layouts.webmaster.WMView')

@section('webmasterContent')
<!-- Content Row -->

<div class="row">
  <div class="col-xl-12 col-lg-7">
  <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descripcion</th>
            <th>Habilitar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $producto)
            <tr>
                <td>{!! $producto->id !!}</td>
                <td>{!! $producto->nombre !!}</td>
                 <td>{!! $producto->descripcion !!}</td>
                 <td><a href="/webmaster/productoRestore/{{$producto->id}}"><i class="fa fa-toggle-on" style="color:black"></i></a></td>

            </tr>
        @endforeach
    </tbody>
    </table>
  </div>
</div>
@endsection
