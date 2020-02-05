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
$(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
</script>
<div class="row">
<div class="col-xl-12 col-lg-12">
<h3>Productos</h3>
</div>

  <div class="col-xl-3 col-lg-3">

  @if(isset($error))
 
        <div class="alert alert-danger">
            <ul>
                
                <li>{{ $error }}</li>
                
            </ul>
        </div>
       
  @endif
  <a class="btn btn-primary" href="/admin/productCreate/">Añadir Producto</a>
  <br><br>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Buscador</span>
  </div>
  <input type="text" class="form-control border" id="myInput"   aria-describedby="basic-addon1">
</div>

</div>
<div class="col-xl-7 col-lg-7">
  <br>
  <table class="table table-striped border" id="dtBasicExample" cellspacing="0" width="100%" id="myList">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Precio</th>
      <th>Stock</th>
      <th>Editar</th>
      <th>Eliminar</th>
    </tr>
    </thead>
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


