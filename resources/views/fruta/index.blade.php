@extends('plantilla')
@section('titulo', 'Inicio')
@include('partials.nav')
@section('contenido')
<a href="{{ route('fruta.create') }}" class="btn btn-primary btn-sm" style="position: absolute; left: 16.25%; top: 48px">Crear</a>
<div class="container mt-5">
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Temporada</th>
                <th>Precio</th>
                <th>Foto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        @foreach($frutas as $fruta)
            <tr>
                <td>{{ $fruta->id}}</td>
                <td>{{ $fruta->nombre}}</td>
                <td>{{ $fruta->temporada}}</td>
                <td>{{ number_format($fruta->precio, 2)}}€</td>
                <td><img src="{{ $fruta->foto }}" style="max-width: 100px"></td>
                <td>
                    <a href="{{ route('fruta.edit', $fruta->id) }}" class="btn btn-primary btn-sm" >Editar</a>
                    <form action="{{ route('fruta.destroy', $fruta->id) }}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger btn-sm" value="Eliminar" />
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection