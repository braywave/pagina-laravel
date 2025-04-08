@extends('layout')

@section('titulo', 'Listado de Categorías')

@section('contenido')
    <h2>Listado de Categorías</h2>

    @if($categorias->isEmpty())
        <p>No hay categorías registradas.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->nombre }}</td>
                        <td>{{ $categoria->descripcion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
