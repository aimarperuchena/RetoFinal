@extends('layouts.webmaster.WMView')

@section('webmasterContent')
<script src="{{url('assets/js/val_Producto.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{url('assets/css/val_producto.css')}}">
<!-- Content Row -->
<br><br>
<div class="row">
  <div class="col-xl-12 col-lg-7">
    <h3>Editar Stock</h3><br>
    <form action="{{route ('webmaster.productUpdate', $producto->id)}}" method="post">
             {{ csrf_field() }}

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Nombre: </span>
            <input id="nombre" class="form-control border" aria-describedby="basic-addon1" type="text" name="nombre" value="{{$producto->nombre}}" size="53" pattern="^[A-Z]{1}[a-z0-9]{2,24}" title="Primera letra mayuscula" required>
            </div>
        </div>

        <div class="input-group mb-5">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Descripcion: </span>
                <input id="descripcion" class="form-control border" aria-describedby="basic-addon1" type="text" name="descripcion" size="50" value="{{$producto->descripcion}}"  pattern="^[A-Z]{1}[a-z0-9]{2,49}" title="Primera letra mayuscula" required>
            </div>
        </div>

        <input id="enviar" class="btn btn-primary" type="submit" value="Actualizar"><br>
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
<script type="text/javascript">
    let Nombre = document.getElementById("nombre");
 let Descri = document.getElementById("descripcion");
 let enviar = document.getElementById("enviar");
 let patron = /^[A-Z]{1}[a-z0-9]{2}/g;

 enviar.disabled = true;

 Nombre.onkeyup = function() {

     if (Nombre.value.match(patron)) {
         nombre.classList.remove("invalid");
         nombre.classList.add("valid");
         enviar.disabled = false;
     } else {
         nombre.classList.remove("valid");
         nombre.classList.add("invalid");
         enviar.disabled = true;
     }
 }

 Descri.onkeyup = function() {

     if (Descri.value.match(patron)) {
         descripcion.classList.remove("invalid");
         descripcion.classList.add("valid");
         enviar.disabled = false;

     } else {
         descripcion.classList.remove("valid");
         descripcion.classList.add("invalid");
         enviar.disabled = true;
     }
 }
</script>
@endsection

