{{Auth::user()->role->id}}
<!-- @if(Auth::user()->role->id)
<a href="/admin">Listar Usuarios</a>
@else
eres usuario
@endif -->

@if(Auth::user()->isAdmin())
<a href="/admin">Listar Usuarios</a>

@else



@endif