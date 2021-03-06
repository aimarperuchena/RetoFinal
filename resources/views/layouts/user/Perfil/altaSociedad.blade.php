@extends('layouts.app')
@section('content')
<br><br>
<!-- Formulario dar alta nueva sociedad -->
<div class="container text-center">
  <h1>Registrar una sociedad</h1>
  <h5>Introduce todos los datos necesarios.</h5>
  <form class="form-group" action="{{ route('sociedad.alta') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">{{ __('multi.nomform') }}</span>
      </div>
      <input type="text" class="form-control border" placeholder="Nombre" name="nombre" required>
    </div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">{{ __('multi.ubiform') }}</span>
      </div>
      <input type="text" class="form-control border" placeholder="ubicacion" name="ubicacion" required>
    </div>
    <div class="input-group mb-3">
      <input type="number" class="form-control border" placeholder="Telefono..." name="telefono" required>
      <div class="input-group-append">
        <span class="input-group-text">{{ __('multi.telform') }}</span>
      </div>
    </div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Upload</span>
      </div>
      <div class="custom-file">
        <input type="file" class="custom-file-input" name="image">
        <label class="custom-file-label">Choose file</label>
      </div>
    </div>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text">{{ __('multi.descform') }}</span>
      </div>
      <textarea class="form-control border" aria-label="descripcion" name="descripcion"></textarea>
    </div>
    <button type="submit" class="btn btn-primary mt-5 reserva">{{ __('multi.crearsoci') }}</button>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
  </form>
</div>
@endsection
