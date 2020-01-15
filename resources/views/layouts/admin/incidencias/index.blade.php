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
    <h3>Incidencias</h3>
    <a class="btn btn-primary" href="/admin/createIncidencia">Crear Incidencia</a>
    <br><br>


    
    <form action="{{route('admin.incidenciaIndexFiltro')}}" method="post">
      {{ csrf_field() }}


      <div class="input-group mb-2 ">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">Estado:</label>
        </div>
        <select class="custom-select " name="estado">
          @if($tipo==1)
          <option value="1">Pendiente</option>
          <option value="2">Solucinado</option>
          @endif
          @if($tipo==2)
          <option value="2">Solucinado</option>
          <option value="1">Pendiente</option>

          @endif
        </select>
        <input class="btn btn-primary" type="submit" value="Enviar">

      </div>



    </form>
    <br><br>
    <input class="form-control border" id="myInput" type="text" placeholder="Buscador..">
    <br>
    <table class="table table-striped border">
    <thead>
      <tr>
        <th>Id</th>
        <th>Descripcion</th>
        <th>Estado</th>
        <th>Fecha</th>
        <th>Editar</th>
        <th>Eliminar</th>

      </tr>
      </thead>
      <tbody id="myTable">
      @foreach($incidencias as $incidencia)
      <tr>
        <td>{{$incidencia->id}}</td>
        <td>{{$incidencia->descripcion}}</td>
        <td>{{$incidencia->estado}}</td>
        <td>{{$incidencia->fecha}}</td>
        <td><a href="/admin/incidenciaEdit/{{$incidencia->id}}"><i class="fa fa-pencil" style="color:black"></i></a></td>
        <td><a href="/admin/incidenciaDelete/{{$incidencia->id}}"><i class="fa fa-trash-o" style="color:black"></i></a></td>

      </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection