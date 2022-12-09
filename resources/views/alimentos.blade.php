<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alimentos</title>
    <style>
        .centrado {
            text-align: center;
        }

        .oculto {
            display: none;
        }

        .alimentos {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        h1{
            text-align: center;
            margin-bottom: 75px !important;
        }
    </style>
</head>

<body>
    @extends('layouts.app-master')

    @section('content')
<h1>Alimentos y sus valores nutricionales</h1>
    @php
    $contador = 0;
    @endphp
    <div class="alimentos">
        @foreach ($alimentos as $alimento)
        <div style="width: 30%">
            <form action="valor-alimentos" method="post">
                @csrf
                <p class="oculto">id: <input type="text" name="alimento_id" value="{{$alimento->id}}">
                <p>
                    <input type="image" src="{{$fotos[$contador]}}" alt="{{$alimento->nombre}}" width="100%"
                        height="350px" value="{{$alimento->id}}">
            </form>
            <div class="centrado"> Producto: <u>{{$alimento->nombre}}</u></div>
            <div class="centrado">{{$alimento->descripcion}}</div>
            <div class="centrado">Creación de la marca: <u>{{$alimento->fecha_creacion}}</u></div>
        </div>
        @php
        $contador++;
        @endphp
        @endforeach
    </div>
    @endsection
</body>

</html>