@extends('layouts.webmaster.WMView')

@section('webmasterContent')
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
<br>
<div class="row">
  @if(isset($error))

        <div class="alert alert-danger">
            <ul>

                <li>{{ $error }}</li>

            </ul>
        </div>
  @endif
  <br><br>
  <input class="form-control border col-lg-12" id="myInput" type="text" placeholder="Buscador..">
  <br>
  <table class="table table-striped border" id="dtBasicExample" cellspacing="0" width="100%" id="myList">
    <br><br>
    <a class="btn btn-primary col-lg-2" href="/webmaster/productCreate/">Añadir Producto</a>
    <div class="row">

  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

  <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Editar</th>
        </tr>
    </thead>
    <tbody id="myTable">
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
