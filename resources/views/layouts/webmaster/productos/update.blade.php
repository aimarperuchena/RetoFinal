@extends('layouts.webmaster.WMView')

@section('webmasterContent')
<!-- Content Row -->

<div class="row">
  <div class="col-xl-12 col-lg-7">
    <h3>Editar Stock</h3><br>
    <form action="{{route ('webmaster.productUpdate', $producto->id)}}" method="post">
        {{ csrf_field() }}
        <input type="text" name="nombre" value="{{$producto->nombre}}" size="25"><br><br>
        <input type="text" name="descripcion" value="{{$producto->descripcion}}" size="25"><br><br>
        <input type="submit" value="Actualizar"><br><br>

    </form>
  </div>
</div>
@endsection

