@extends('adminlte::page')

@section('title', 'Nursing Home')

@section('content_header')
    <h1>Editar Producto</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($product, ['route' => ['admin.productos.update', $product], 'method' => 'put']) !!}

            @include('admin.productos.partials.form')

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
