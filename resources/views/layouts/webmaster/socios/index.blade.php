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
  <input class="form-control border" id="myInput" type="text" placeholder="Buscador..">

  <br>
  <table class="table table-striped border" id="dtBasicExample" cellspacing="0" width="100%" id="myList">

    <div class="row">
  <div class="col-xl-12 col-lg-7">
    <table class="table">
        <thead>
            <tr>
                <th>ID Usuario</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Alta/Baja</th>

            </tr>
        </thead>
        <tbody id="myTable">
            @foreach($socios as $socio)
                <tr>
                    <td>{!! $socio->id !!}</td>
                    <td>{!! $socio->nombre !!}</td>
                    <td>{!! $socio->apellido !!}</td>
                    <td>{!! $socio->telefono !!}</td>
                    <td>{!! $socio->email !!}</td>
                    @if ($socio->deleted_at===null)
                    <td><a id="w3s" href="/webmaster/socioDestroy/{{$socio->id}}"><i class="fas fa-thumbs-down" style="color:black"></i></a></td>
                    @else
                    <td><a id="w3s" href="/webmaster/socioRestore/{{$socio->id}}"><i class="fas fa-thumbs-up" style="color:black"></i></a></td>
                    @endif
                </tr>
            @endforeach


        </tbody>
    </table>
  </div>
</div>
@endsection

