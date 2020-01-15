@extends('layouts.webmaster.WMView')

@section('webmasterContent')
<!-- Content Row -->
<br><br>
<div class="row">
  <div class="col-xl-12 col-lg-7">
  <h3>Añadir Producto</h3><br>
  <form action="{{route ('webmaster.productStore')}}" method="post">
    {{ csrf_field() }}

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Nombre: </span>
        <input class="form-control border" aria-describedby="basic-addon1" type="text" size="53" name="nombre" placeholder="Nombre del producto"  minlength="3" maxlength="20" required>
        </div>
    </div>

    <div class="input-group mb-5">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Descripcion: </span>
            <input class="form-control border" aria-describedby="basic-addon1" type="text" size="50" name="descripcion" placeholder="Descripcion del producto"  minlength="3" maxlength="50" required>
        </div>
    </div>
    <input class="btn btn-primary" type="submit" value="Añadir"><br>
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
