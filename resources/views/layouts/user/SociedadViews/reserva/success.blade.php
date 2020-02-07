@extends('layouts.index')
@section('content')
<br><br><br><br><br>

<div class="container" style="height: 100vh;">
  <div class="jumbotron">
    <h1 class="display-4">{{ __('multi.exito') }}</h1>
    <p class="lead">{{ __('multi.enhorabuena') }} {{$fecha}}, {{ __('multi.enhorabuena2') }} {{$mesa}}, {{ __('multi.para') }} {{$personas}} {{ __('multi.personas') }}.</p>
    <hr class="my-4">
    <p>{{ __('multi.volver') }}</p>
    <a class="btn btn-primary btn-lg" href="{{ route('usuario.listado') }}" role="button">{{ __('multi.volverSolo') }}</a>
  </div>
</div>

@endsection
