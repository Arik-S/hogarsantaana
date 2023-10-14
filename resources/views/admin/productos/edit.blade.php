@extends('adminlte::page')

@section('title', 'Editar Producto')

@section('content_header')
    <h1>Editar Producto</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-primary">
            {{ session('info') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::model($product, ['route' => ['admin.productos.update', $product], 'enctype' => 'multipart/form-data']) !!}

            <!-- Agrega 'enctype' para admitir la carga de archivos -->

                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del producto']) !!}

                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('description', 'Descripción') !!}
                    {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripción del producto']) !!}

                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
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

                {!! Form::submit('Actualizar Producto', ['class' => 'btn btn-primary mt-2']) !!}
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
