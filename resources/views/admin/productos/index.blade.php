@extends('adminlte::page')

@section('title', 'Nursing Home')

@section('content_header')
    <h1>Lista de Productos</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-primary" role="alert">
            <strong>Éxito</strong> {{ session('info') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.productos.create') }}" class="btn btn-primary">Crear Producto</a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Imagen</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>
                                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="product-image">
                                </td>
                                <td>
                                    <a href="{{ route('admin.productos.edit', $product) }}" class="btn btn-info">Editar</a>
                                    <form action="{{ route('admin.productos.destroy', $product) }}" method="POST" style="display: inline;">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn" type="submit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">No hay ningún producto registrado</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .product-image {
            max-width: 100px;
        }
    </style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
