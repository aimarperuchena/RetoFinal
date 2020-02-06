@extends('layouts.webmaster.WMView')

@section('webmasterContent')
<!-- Content Row -->
<script src="{{ url('assets/js/jquery-3.4.1.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $("#myInput").on("keyup", function() {

            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
<br>
<div class="row">
    <h1 class="d-flex justify-content-center text-primary container-fluid">Listado de peticiones</h1>
    <div class="col-xl-12 col-lg-12">
        <br>

        <form action="{{route('webmaster.peticionFiltrado')}}" method="post">
            {{ csrf_field() }} @if(isset($tipo))
            <div class="input-group mb-2 ">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Estado:</label>
                </div>
                <select class="custom-select " name="estado">
                    @if($tipo==1)
                    <option value="1">Denegado</option>
                    <option value="2">Aceptado</option>
                    @endif @if($tipo==2)
                    <option value="2">Aceptado</option>
                    <option value="1">Denegado</option>
                    @endif
                </select>
                <input class="btn btn-primary" type="submit" value="Enviar">
            </div>
            @else
            <div class="input-group mb-2 ">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Estado:</label>
                </div>
                <select class="custom-select " name="estado">
                    <option value="1">Denegado</option>
                    <option value="2">Aceptado</option>
                </select>
                <input class="btn btn-primary" type="submit" value="Enviar">
            </div>
            @endif
        </form>

    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Busqueda</span>
  </div>
  <input class="form-control border" id="myInput" type="text" >
</div>
  </div>
  <div class="col-xl-12 col-lg-7">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Ubicacion</th>
                <th>Telefono</th>
                <th>Estado</th>
                <th>Fecha solicitada</th>
                @foreach($soci as $sociedad)
                @if ($sociedad->estado==='pendiente')
                <th>Denegar</th>
                <th>Aceptar</th>
                @else
                <th  style="display:none;"></th>
                @endif
                @endforeach


            </tr>
        </thead>
        <tbody id="myTable">
            @foreach($soci as $sociedad)
                <tr>
                    <td>{!! $sociedad->id !!}</td>
                    <td>{!! $sociedad->nombre !!}</td>
                    <td>{!! $sociedad->ubicacion !!}</td>
                    <td>{!! $sociedad->telefono !!}</td>
                    <td>{!! $sociedad->estado !!}</td>
                    <td>{!! $sociedad->created_at !!}</td>
                    @if ($sociedad->estado==='pendiente')
                    <td><a id="w3s" href="/webmaster/peticionDenegar/{{$sociedad->id}}"><i class="fas fa-ban" style="color:black"></i></a></td>
                    <td><a id="w3s" href="/webmaster/peticionAceptar/{{$sociedad->id}}"><i class="fas fa-check-circle" style="color:black"></i></a></td>
                    @else
                    <td style="display:none;"></td>
                    <td style="display:none;"><</td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
  </div>
</div>
@endsection
