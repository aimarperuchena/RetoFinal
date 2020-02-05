@extends('layouts.webmaster.WMView')

@section('webmasterContent')
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
<div class="row">
  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Alta/Baja</th>
            </tr>
        </thead>
        <tbody id="myTable">
            @foreach($soci as $sociedad)
                <tr>
                    <td>{!! $sociedad->id !!}</td>
                    <td>{!! $sociedad->nombre !!}</td>
                    <td>{{ !empty($sociedad->users) ? $sociedad->users->email:'' }}</td>
                    <td>{!! $sociedad->telefono !!}</td>
                    @if ($sociedad->deleted_at===null)
                    <td><a id="w3s" href="/webmaster/sociDestroy/{{$sociedad->id}}"><i class="fas fa-thumbs-down" style="color:black"></i></a></td>
                    @else
                    <td><a id="w3s" href="/webmaster/sociRestore/{{$sociedad->id}}"><i class="fas fa-thumbs-up" style="color:black"></i></a></td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
  </div>
</div>
@endsection

