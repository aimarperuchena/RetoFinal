@extends('layouts.admin.adminView')

@section('adminContent')
<!-- Content Row -->
<script src="{{ url('assets/js/jquery-3.4.1.min.js')}}"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {

    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<div class="row">
  <div class="col-xl-8 col-lg-7">
  <h3>Productos</h3>
  @if(isset($error))
 
        <div class="alert alert-danger">
            <ul>
                
                <li>{{ $error }}</li>
                
            </ul>
        </div>
       
  @endif
  <a class="btn btn-primary" href="/admin/productCreate/">Añadir Producto</a>
<br><br>
  <input class="form-control border" id="myInput" type="text" placeholder="Buscador..">

  <br>
  <table class="table table-striped" id="myList">
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Precio</th>
      <th>Stock</th>
      <th>Editar</th>
      <th>Eliminar</th>
    </tr>
    <tbody id="myTable">
    @foreach($sociedad->productos as $producto)
    <tr>
      <td>{{$producto->id}}</td>
      <td>{{$producto->producto->nombre}}</td>
      <td>{{$producto->precio}}</td>
      <td>{{$producto->stock}}</td>
      
      
      <td><a href="/admin/productEdit/{{$producto->id}}"><i class="fa fa-pencil" style="color:black"></i></a></td>
      <td><a href="/admin/productDestroy/{{$producto->id}}"><i class="fa fa-trash-o" style="color:black"></i></a></td>
    </tr>
    @endforeach
    </tbody>
  </table>
  </div>
</div>
@endsection


