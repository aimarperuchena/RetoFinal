
@extends('layouts.index')
@section('content')
@include('layouts.webmaster.WMasterView')

 <a href="/webmaster/productCreate/">Añadir Producto</a><br>

<table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Descripcion</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productos as $producto)
                            <tr>
                                <td>{!! $producto->id !!}</td>
                                <td>{!! $producto->nombre !!}</td>
                                 <td>{!! $producto->descripcion !!}</td>
                                 <td><a href="/webmaster/productEdit/{{$producto->id}}"><i class="fa fa-pencil" style="color:black"></i></a></td>
                                 <td><a href="/webmaster/productDestroy/{{$producto->id}}"><i class="fa fa-trash-o" style="color:black"></i></a></td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>

@endsection