@extends('layout')
@section('content')
<div class="row">
    <section class="content">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left">
                        <h3>Lista Libros</h3>
                    </div>
                    @if (\Auth::user()->role_id === 1)
                    <div class="pull-right">
                        <div class="btn-group">
                            <a href="{{ route('libro.create') }}" class="btn btn-info">Añadir Libro</a>
                        </div>
                    </div>
                    @endif
                    <div class="table-container">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                                <th>Nombre</th>
                                <th>Resumen</th>
                                <th>No. Páginas</th>
                                <th>Edicion</th>
                                <th>Autor</th>
                                <th>Precio</th>
                                @if (\Auth::user()->role_id === 1)
                                <th>Editar</th>
                                <th>Eliminar</th>
                                @endif
                            </thead>
                            <tbody>
                                @if($libros->count())
                                @foreach($libros as $libro)
                                <tr>
                                    <td>{{$libro->nombre}}</td>
                                    <td>{{$libro->resumen}}</td>
                                    <td>{{$libro->npagina}}</td>
                                    <td>{{$libro->edicion}}</td>
                                    <td>{{$libro->autor}}</td>
                                    <td>{{$libro->precio}}</td>
                                    @if (\Auth::user()->role_id === 1)
                                    <td><a class="btn btn-primary btn-xs"
                                            href="{{action('LibroController@edit', $libro->id)}}"><span
                                                class="glyphicon glyphicon-pencil"></span></a></td>
                                    <td>
                                        <form action="{{action('LibroController@destroy', $libro->id)}}" method="post">
                                            {{csrf_field()}}
                                            <input name="_method" type="hidden" value="DELETE">

                                            <button class="btn btn-danger btn-xs" type="submit"><span
                                                    class="glyphicon glyphicon-trash"></span></button>

                                    </td>
                                    @endif
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="8">No hay registro !!</td>
                                </tr>
                                @endif
                            </tbody>

                        </table>
                    </div>
                </div>
                {{ $libros->links() }}
            </div>
        </div>
    </section>

    @endsection