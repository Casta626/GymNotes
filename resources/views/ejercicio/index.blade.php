<!DOCTYPE html>
<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    h1{
        font-size-adjust: initial;
        text-align: center;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        
    }
    table.ejercicio{
        text-align: center;
        width: 100%;
        font-family: 'Roboto', sans-serif;
        color: white;
        padding:  2%;
    }
    tr,td,th{
        padding: 1.5%;
    }
</style>
</head>
<body>
@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">

        {{-- @if(count($series > 0)) --}}

        <h1>Semana 1 03/10/2022-09/10/2022</h1>
        <h1>Lunes</h1>
        
        
        <table class="ejercicio">
                <tr class="bg-dark">
                    <th>Músculo</th>
                    <th>Descripcion</th>
                    <th>Peso</th>
                    <th>Repeticiones</th>
                    <th>Descanso</th>
                </tr>
                @foreach($series as $serie)

                    @if ($serie->nombre_musculo == "Dorsales")
                <tr class="bg-primary">
                    <td>{{ $serie->nombre_musculo }}</td>
                    <td>{{ $serie->descripcion }}</td>
                    <td>{{ $serie->peso }} kg</td>
                    <td>{{ $serie->repeticiones }}</td>
                    <td>{{ $serie->tiempo_descanso }} seg</td>
                </tr>
                    @endif
                    @if ($serie->nombre_musculo == "Pecho")
                <tr class="bg-success">
                    <td>{{ $serie->nombre_musculo }}</td>
                    <td>{{ $serie->descripcion }}</td>
                    <td>{{ $serie->peso }} kg</td>
                    <td>{{ $serie->repeticiones }}</td>
                    <td>{{ $serie->tiempo_descanso }} seg</td>
                </tr>
                    @endif
                @endforeach
        

        {{-- @else
            <tr>
                <td>Semana 1</td>
            </tr>
        @endif --}}
        </table>
    </div>
@endsection
</body>
</html>