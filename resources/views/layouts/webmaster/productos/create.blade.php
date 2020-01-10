@extends('layouts.webmaster.WMView')

@section('webmasterContent')
<!-- Content Row -->

<div class="row">
  <div class="col-xl-12 col-lg-7">
  <h3>Añadir Producto</h3><br>
  <form action="{{route ('webmaster.productStore')}}" method="post">
    {{ csrf_field() }}
    <input type="text" name="nombre" placeholder="Nombre del producto" size="25" minlength="3" maxlength="20" required><br><br>
    <input type="text" name="descripcion" placeholder="Descripcion del producto" size="25" minlength="3" maxlength="50" required><br><br>
    <input type="submit" value="Añadir"><br><br>
</form>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
  </div>
</div>
@endsection
