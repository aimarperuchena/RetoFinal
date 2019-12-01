@if(Auth::user()->isAdmin())
<div class="div_admin">
    <h2>Acceso como administrador</h2>

    <table>
        <tr>
            <th>Usuario</th>
            <th>Email</th>
            <th>Rol</th>
        </tr>
        @if (isset($usuarios) )
        @foreach ($usuarios as $usuario)
        <tr>
            <td>{{$usuario->name}}</td>
            <td>{{$usuario->email}}</td>
            <td><a href="/edit_user/{{$usuario->id}}">Editar</a></td>
            <td><a href="/delete/{{$usuario->id}}">Eliminar</a></td>
        </tr>

        @endforeach
    </table>
    @endif
</div>
@endif