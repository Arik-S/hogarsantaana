@extends('adminlte::page')

@section('title', 'Nursing Home')

@section('content_header')
    <h1>Lista de Productos</h1>
@stop

@section('content')
    @livewire('admin-products')
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
