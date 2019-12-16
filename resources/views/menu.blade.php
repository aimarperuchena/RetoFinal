@extends('layouts.app')
@section('content')

  @if(Auth::user()->isAdmin())
  <div class="div_usuario">
  <h2>{{ __('multi.acceso') }}</h2>
  <a href="{{route('admin.index')}}">{{ __('multi.lusuarios') }}</a>
  </div>

  @else
  <div class="div_usuario">
      <h2>{{ __('multi.accu') }}</h2>
      <a href="{{route('user.edit')}}">Editar Usuario</a>
      <a href="/user_delete/{{ Auth::user()->id }}">Eliminar Usuario</a>
  </div>


  @endif
@endsection
