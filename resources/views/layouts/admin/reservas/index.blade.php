@extends('layouts.admin.adminView') @section('adminContent')
<script src="/assets/js/jquery-3.4.1.min.js"></script>

<script>
    function socio() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("socio");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    function tipo() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("tipo");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }


</script>

<div class="row">
    <div class="col-xl-4 col-lg-4">
        <h3>Reservas</h3>

        <form action="{{route('admin.reservaIndexFiltro')}}" method="post">
            {{ csrf_field() }}

            <div class="input-group mb-2 ">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Fecha:</label>
                </div>
                <select class="custom-select " name="tipo">
                    @if($tipo==1)
                    <option value="1">Actuales</option>
                    <option value="2">Historico</option>
                    @endif @if($tipo==2)
                    <option value="2">Historico</option>
                    <option value="1">Actuales</option>

                    @endif
                </select>
                <input class="btn btn-primary" type="submit" value="Enviar">

            </div>
        </form>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Socio</span>
            </div>
            <input type="text" id="socio" onkeyup="socio()" class="form-control border input" aria-label="Socio" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Tipo</span>
            </div>
            <input type="text" id="tipo" onkeyup="tipo()" class="form-control border input" aria-label="Tipo" aria-describedby="basic-addon2">
        </div>


    </div>
    <div class="col-xl-8 col-lg-7">
        <!--<a href="/admin/reservaCreate" class="btn btn-primary">Crear Reserva</a> -->
        <table class="table table-striped border" id="myTable">
            <thead>
                <tr class="header">
                    <th>Socio</th>
                    <th>Tipo</th>
                    <th >Fecha</th>
                    <th>Personas</th>
                    <th>Editar</th>
                    @if($tipo==1)
                    <th>Eliminar</th>
                    @endif
                    <th>Ver</th>
                </tr>
            </thead>
            @foreach($reservas as $reserva)
            <tr>
                <td>{{$reserva->usuario->nombre}} {{$reserva->usuario->apellido}}</td>
                <td>{{$reserva->tipo->nombre}}</td>
                <td>{{$reserva->fecha}}</td>
                <td>{{$reserva->personas}}</td>
                <td><a href="/admin/reservaEdit/{{$reserva->id}}"><i class="fa fa-pencil" style="color:black"></i></a></td>
                @if($tipo==1)
                <td><a href="/admin/reservaDelete/{{$reserva->id}}"><i class="fa fa-trash-o" style="color:black"></a></td>
                @endif

                <td><a href="/admin/reservaShow/{{$reserva->id}}"><i class="fa fa-eye" style="color:black"></i></a></td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection
