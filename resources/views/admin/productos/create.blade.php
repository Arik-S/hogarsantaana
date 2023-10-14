@extends('adminlte::page')

@section('title', 'Nursing Home')

@section('content_header')
    <h1>Crear nuevo producto</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.productos.store', 'enctype' => 'multipart/form-data']) !!}
            <!-- Agrega 'enctype' para admitir la carga de archivos -->

                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del producto']) !!}

                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('description', 'Descripción') !!}
                    {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripción del producto']) !!}

                    @error('description')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('image', 'Imagen') !!}
                    {!! Form::file('image', ['class' => 'form-control']) !!}
                    <!-- Utiliza 'file' para el campo de imagen -->
                
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                    

                {!! Form::submit('Crear Producto', ['class' => 'btn btn-primary mt-2']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
