@extends('layouts.admin.adminView')
@section('adminContent')


<script src="{{ secure_asset('assets/js/jquery-3.4.1.min.js')}}"></script>

<!-- Content Row -->
<script src="{{secure_asset('assets/js/validacion_crearProducto.js')}}"></script>


<div class="row">
    <div class="col-xl-8 col-lg-7">
        <h3>Añadir Productos</h3>
        <form action="{{route ('admin.productStore')}}" method="post">
            {{ csrf_field() }}

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Producto:</label>
                </div>
                <select class="custom-select" name="producto">
                    @foreach( $productos as $producto)
                    <option value="{{$producto->id}}">{{$producto->nombre}}</option>
                    @endforeach
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Stock: </span>
                </div>
                <input type="number" class="form-control border" placeholder="Stock" id="stock"  aria-label="Stock" name="stock" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Precio: </span>
                </div>
                <input type="number" class="form-control border" placeholder="Precio" step="any" id="precio" aria-label="Precio" name="precio" aria-describedby="basic-addon1">
            </div>

            
            
            <input class="btn btn-primary" type="submit" value="Crear" id="enviar">
        </form>


        <div id="error_val" class="alert alert-danger"style="visibility:hidden">
            <ul >
                
                <li style="visibility:hidden" id="error_stock">El stock debe ser mayor a 5</li>
                <li style="visibility:hidden" id="error_precio">El precio debe ser mayor a 0.1</li>
               
              
            </ul>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
@endsection