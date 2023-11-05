@extends('adminlte::page')

@section('title', 'Hogar San Agustín')

@section('content_header')
    <h1>Lista de donaciones</h1>
@stop

@section('content')
    @livewire('admin-donations')
@stop

@section('css')
<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
@stop



@section('js')
    <script> console.log('Hi!'); </script>
@stop
