@extends('layouts.app')
@section('content')
<br><br>
<!-- Formulario dar alta nueva sociedad -->
<div class="container text-center">
  <h1>Registrar una sociedad</h1>
  <h5>Introduce todos los datos necesarios.</h5>
  <form class="form-group" action="{{ route('sociedad.alta') }}" method="post">
    @csrf
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Nombre</span>
      </div>
      <input type="text" class="form-control" placeholder="Nombre" name="nombre">
    </div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Ubicación</span>
      </div>
      <input type="text" class="form-control" placeholder="Nombre" name="ubicacion">
    </div>
    <div class="input-group mb-3">
      <input type="number" class="form-control" placeholder="Telefono..." name="telefono">
      <div class="input-group-append">
        <span class="input-group-text">Telefono</span>
      </div>
    </div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Upload</span>
      </div>
      <div class="custom-file">
        <input type="file" class="custom-file-input" name="link_plano">
        <label class="custom-file-label">Choose file</label>
      </div>
    </div>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text">Descripción</span>
      </div>
      <textarea class="form-control" aria-label="descripcion" name="descripcion"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Crear Sociedad</button>
  </form>
</div>
@endsection
