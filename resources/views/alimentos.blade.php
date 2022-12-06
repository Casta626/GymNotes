<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alimentos</title>
    <style>
        .centrado{
            text-align: center;
        }
        .oculto{
            display: none;
        }
    </style>
</head>
<body>
    @extends('layouts.app-master')

    @section('content')
    
@php
    $contador = 0;
@endphp
<div style="display: flex;">
    @foreach ($alimentos as $alimento)
    <div style="width: 30%">
        <form action="valor-alimentos" method="get">
            <p class="oculto">id: <input type="text" name="id" value="{{$alimento->id}}"><p>
        <input type="image" src="{{$fotos[$contador]}}" alt="{{$alimento->nombre}}" width="100%" height="80%" value="{{$alimento->id}}">
    </form>
        <div class="centrado">{{$alimento->nombre}}</div>
        <div class="centrado">{{$alimento->descripcion}}</div>
        <div class="centrado">Creación de la marca: {{$alimento->fecha_creacion}}</div>
    </div>    
        @php
            $contador++;
        @endphp
    @endforeach
</div>
    @endsection
</body>
</html>