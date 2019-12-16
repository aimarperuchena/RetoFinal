@extends('layouts.app')
@section('content')
    @if(Auth::user()->isAdmin())
    <div class="div_admin">
        <h2>{{ __('multi.acceso') }}</h2>

        <table>
            <tr>
                <th>{{ __('multi.usuario') }}</th>
                <th>{{ __('multi.correo') }}</th>
                <th>{{ __('multi.rol') }}</th>
            </tr>
            @if (isset($usuarios) )
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->email}}</td>
                <td><a href="/edit_user/{{$usuario->id}}">{{ __('multi.editar') }}</a></td>
                <td><a href="/delete/{{$usuario->id}}">{{ __('multi.eliminar') }}</a></td>
            </tr>

            @endforeach
        </table>
        @endif
    </div>

    @else
    <div class="div_admin">
    <h3>Pirate de aqui que no eres admin</h3>
    </div>
    @endif
@endsection
