@extends('adminlte::page')

@section('title', 'Hogar San Agustín')

@section('content_header')
    <div style="background-color: #f0f0f0; padding: 10px; border-radius: 5px; box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2); text-align: center;">
        <h1 style="font-size: 24px; font-weight: bold; margin: 0;">Bienvenido a Hogar San Agustín</h1>
    </div>
@stop



@section('content')
<div class="info-box bg-info">
    <i class="fas fa-file info-box-icon" style="font-size: 30px; margin-right: 10px;"></i>
    <div class="info-box-content">
        <span class="info-box-text" style="font-size: 14px; font-weight: bold;">Donaciones Totales</span>
        <span class="info-box-number" style="font-size: 20px; font-weight: bold;">{{ $donationCount }}</span>
    </div>
</div>
<div class="info-box bg-success">
    <i class="fas fa-users info-box-icon" style="font-size: 30px; margin-right: 10px;"></i>
    <div class="info-box-content">
        <span class="info-box-text" style="font-size: 14px; font-weight: bold;">Cantidad de Usuarios</span>
        <span class="info-box-number" style="font-size: 20px; font-weight: bold;">{{ $userCount }}</span>
    </div>
</div>
<div class="info-box bg-warning">
    <i class="fas fa-cubes info-box-icon" style="font-size: 30px; margin-right: 10px;"></i>
    <div class="info-box-content">
        <span class="info-box-text" style="font-size: 14px; font-weight: bold;">Cantidad de Productos</span>
        <span class="info-box-number" style="font-size: 20px; font-weight: bold;">{{ $productCount }}</span>
    </div>
</div>
    
@stop







@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
