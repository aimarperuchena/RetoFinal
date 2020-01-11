@extends('layouts.admin.adminView')
@section('adminContent')


<!-- Content Row -->

<div class="row">
    <div class="col-xl-8 col-lg-7">
        <h3>Editar Stock</h3>
        <form action="{{route ('admin.productUpdate')}}" method="post">
            {{ csrf_field() }}

            <input type="hidden" name="id" value="{{$producto->id}}">

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nombre: </span>
                </div>
                <input type="text" readonly class="form-control border" value="{{$producto->producto->nombre}}" placeholder="Nombre" id="nombre" aria-label="Nombre" name="nombre" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Precio: </span>
                </div>
                <input type="number" class="form-control border" step="any" placeholder="Precio" id="precio" value="{{$producto->precio}}" aria-label="Precio" name="precio" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Stock: </span>
                </div>
                <input type="number" class="form-control border" placeholder="Stock" id="stock" value="{{$producto->stock}}" aria-label="Stock" name="stock" aria-describedby="basic-addon1">
            </div>
           
            <input class="btn btn-primary" type="submit" value="Actualizar">
        </form>

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