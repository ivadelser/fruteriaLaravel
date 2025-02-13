@extends('plantilla')
@section('titulo', 'Editar fruta')
@include('partials.nav')
@section('contenido')
    <div class="container">
        <h1 class="mb-4">Editar fruta</h1>
        <form action="{{route('fruta.update', $fruta->id)}}" method="POST" class="row g-3">
            @csrf
            @method('PUT')

            <div class="col-12">
                <label for="nombre" class="form-label">Nombre de la fruta</label>
                <input type="text" id="nombre" name="nombre" class="form-control" value="{{$fruta->nombre}}">
            </div>

            <div class="col-12">
                <label for="temporada" class="form-label">Temporada de la fruta</label>
                <input type="text" id="temporada" name="temporada" class="form-control" value="{{$fruta->temporada}}">
            </div>

            <div class="col-12">
                <label for="precio" class="form-label">Precio de la fruta</label>
                <input type="text" id="precio" name="precio" class="form-control" value="{{$fruta->precio}}">
            </div>

            <div class="col-12">
                <label for="foto" class="form-label">Foto de la fruta</label>
                <input type="text" id="foto" name="foto" class="form-control" value="{{$fruta->foto}}">
            </div>

            <div class="col-12">
                <label for="stock" class="form-label">Stock de la fruta</label>
                <input type="text" id="stock" name="stock" class="form-control" value="{{$fruta->stock}}">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
    </div>

@endsection