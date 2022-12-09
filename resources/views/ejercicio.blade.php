<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicios</title>
    <style>
        .ejercicio {
            display: flex ;
            flex-direction: row;
            flex-wrap: wrap;
            align-content: center;
            justify-content: space-between;
            align-items: center;
        }
        h1.centrado{
            text-align: center;
        }
    </style>
</head>

<body>
    @extends('layouts.app-master')

    @section('content')
    <h1 class="centrado" style="margin-bottom: 50px">Ejercicios</h1>
    <div class="ejercicio">
        @foreach ($ejercicios as $ejercicio)
        <div  id="{{ $ejercicio->id }}" style="width: 30%">
            <img src="https://image.shutterstock.com/image-illustration/this-3d-illustration-shows-view-260nw-1849652074.jpg"
                alt="">

            <h5 class="centrado">{{ $ejercicio->nombre }}</h5>
            <p style="">{{ $ejercicio->descripcion }}</p>

        </div>
        @endforeach
    </div>
    @endsection
</body>

</html>