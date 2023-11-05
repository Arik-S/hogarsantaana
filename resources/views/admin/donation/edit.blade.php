@extends('adminlte::page')

@section('title', 'Editar Producto')

@section('content_header')
    <h1>Cambiar Estado</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-primary">
            {{ session('info') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::model($donation, ['route' => ['admin.donation.update', $donation], 'method' => 'put']) !!}
            @csrf
            @error('permissions')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="form-group">
                {!! Form::label('id', 'Id') !!}
                {!! Form::text('id', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('status', 'Estado') !!}
                {!! Form::select('status', ['0' => 'En espera', '1' => 'Confirmado', '2' => 'Cancelado'], null, ['class' => 'form-control']) !!}
            </div>
       
    
            {!! Form::submit('Actualizar', ['class' => 'btn btn-primary mt-2']) !!}
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
