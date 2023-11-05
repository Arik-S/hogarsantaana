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
            {!! Form::model($producto, ['route' => ['admin.productos.update', $producto], 'enctype' => 'multipart/form-data', 'method' => 'put']) !!}
            @method('PUT')
            
            @csrf
            @error('permissions')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="form-group">
                {!! Form::label('id', 'Id') !!}
                {!! Form::text('id', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
            </div>
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
            </div>
    
            <!-- Mostrar la imagen actual -->
            <div class="form-group">
                {!! Form::label('image', 'Imagen Actual') !!}
                @if ($producto->image)
                    <img src="{{ asset('storage/' . $producto->image) }}" height="100px" width="100px" alt="Imagen actual" class="img-thumbnail">
                @else
                    <p>No hay imagen actual para este producto.</p>
                @endif
            </div>            
            
            <div class="form-group">
                {!! Form::label('status', 'Estado') !!}
                {!! Form::select('status', ['0' => 'Activo', '1' => 'Desactivado'], null, ['class' => 'form-control']) !!}
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
