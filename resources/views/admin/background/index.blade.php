@extends('adminlte::page')

@section('title', 'Gestión de Imágenes de Fondo')

@section('content_header')
    <h1 class="text-center">Insertar Imagen de Fondo</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {{-- Formulario para subir una imagen de fondo --}}
                {{-- Esto recibe fotos porque tiene el enctype--}}
            <form action="{{ route('admin.admin.background') }}" method="POST" enctype="multipart/form-data">
                {{-- Anti hacker para ver si se manda de la pagina original --}}
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre de la Imagen:</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese un nombre descriptivo">
                </div>
                <div class="form-group">
                    <label for="imagen">Seleccionar Imagen de Fondo:</label>
                    <input type="file" name="imagen[]" id="imagen" class="form-control-file">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin_custom.css') }}">
    <style>
        .card {
            width: 50%;
            margin: 0 auto;
        }
    </style>
@stop

@section('js')
    <script>
        console.log('¡Hola!');
    </script>
@stop
