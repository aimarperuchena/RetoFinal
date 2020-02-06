@extends('layouts.admin.adminView')
@section('adminContent')

<script src="/assets/js/jquery-3.4.1.min.js"></script>

<!-- Content Row -->
<script src="/assets/js/validacion_linea.js"></script>



<div class="row">
    <div class="col-xl-4 col-lg-7">
        <h3>Listado Stock</h3>
        <table class="table table-striped">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>

            </tr>
            @foreach($productos as $producto)
            <tr>
                <td>{{$producto->id}}</td>
                <td>{{$producto->producto->nombre}}</td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->stock}}</td>

            </tr>
            @endforeach
        </table>
    </div>
    <div class="col-xl-4 col-lg-7 text-center">
        <h3>Añadir Linea</h3>
        <form action="{{route ('admin.lineaUpdate')}}" method="POST">
            {{ csrf_field() }}

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Producto:</label>
                </div>

                <select class="custom-select" name="producto">
                    <option value="{{$linea->producto_sociedad_id}}">{{$linea->producto->producto->nombre}}</option>
                    @foreach($productos as $producto)
                    @if($producto->id!=$linea->producto_sociedad_id)
                    <option value="{{$producto->id}}">{{$producto->producto->nombre}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <input type="hidden" name="linea" value="{{$linea->id}}">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Unidades: </span>
                </div>
                <input type="text" id="unidades" class="form-control border" placeholder="Unidades" aria-label="Unidades" name="unidades" value="{{$linea->unidades}}" aria-describedby="basic-addon1">
            </div>
            <input type="submit" id="enviar" class="btn btn-primary" value="Actualizar">
            @if(isset($error))
            <div class="alert alert-danger">
                <ul>

                    <li>{{ $error }}</li>

                </ul>
            </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div id="error_val" class="alert alert-danger" style="visibility:hidden">
                <ul>

                    <li id="error_unidades">Unidades Requerido</li>



                </ul>
            </div>
        </form>
    </div>
</div>
@endsection