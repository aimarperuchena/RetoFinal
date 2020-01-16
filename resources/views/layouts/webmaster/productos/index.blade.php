@extends('layouts.webmaster.WMView')

@section('webmasterContent')
<!-- Content Row -->
<br><br>
<div class="col-lg-12 " aria-setsize="10">
<form class="form-inline border border-dark ml-auto">

    <select name="tipo" class="form-control font-weight-bold mr-sm-2 col-lg-1.5" id="exampleFormControlSelect1">
      <option>Buscar por tipo</option>
      <option>nombre</option>
      <option>descripcion</option>

    </select>

    <input name="buscar" class="form-control input-lg col-lg-9" type="search" aria-label="Search" required>
    <button class="btn btn-outline-success ml-auto font-weight-bold my-2 my-sm-0 col-lg-1.5" type="submit">Buscar</button>
  </form>

</div>
<br><br>
<div class="row">
  <div class="col-xl-12 col-lg-7">
  <a href="/webmaster/productCreate/">Añadir Producto</a>
  <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Editar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $producto)
            <tr>
                <td>{!! $producto->id !!}</td>
                <td>{!! $producto->nombre !!}</td>
                 <td>{!! $producto->descripcion !!}</td>
                 <td><a href="/webmaster/productEdit/{{$producto->id}}"><i class="fa fa-pencil" style="color:black"></i></a></td>
            </tr>
        @endforeach
    </tbody>
    </table>
  </div>
</div>
@endsection
