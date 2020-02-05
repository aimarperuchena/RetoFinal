@extends('layouts.admin.adminView') @section('adminContent')

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
    $(document).ready(function() {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });

  
</script>

<!-- Content Row -->

<div class="row">
    <div class="col-xl-8 col-lg-7">
        <h2>Socios</h2>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Buscador</span>
            </div>
            <input type="text" class="form-control border" id="myInput" aria-describedby="basic-addon1">
        </div>

        <table class="table table-striped border " id="dtBasicExample">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody id="myTable">
                @foreach($socios as $socio)

                <tr>
                    <td>
                        {{$socio->id}}
                    </td>
                    <td>{{$socio->nombre}}</td>
                    <td>{{$socio->apellido}}</td>
                    <td>{{$socio->telefono}}</td>
                    <td><a href="/admin/userDelete/{{$socio->id}}"><i class="fa fa-trash-o" style="color:black"></i></a></td>

                </tr>

                @endforeach
            </tbody>

        </table>
    </div>
</div>
@endsection