{{ Auth::user()->role->descripcion }}
@if(Auth::user()->role->esAdmin)
ERES esAdmin
@else
eres usuario
@endif