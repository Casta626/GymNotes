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
{{ setlocale(LC_ALL,"es_ES")  }}
    <div class="bg-light p-5 rounded">

        {{-- @if(count($series > 0)) --}}
        @foreach($agrupaciones_ejercicios as $agrupaciones_ejercicio)
        {{-- <h1>Semana 1 03/10/2022-09/10/2022</h1> --}}
        <h1>{{ ucwords(\Carbon\Carbon::parse(strftime($agrupaciones_ejercicio->updated_at))->formatLocalized('%A %d de %B del %Y')) }}</h1>
        
        
        <table class="ejercicio">
                <tr class="bg-dark">
                    <th>Músculo</th>
                    <th>Descripcion</th>
                    <th>Peso</th>
                    <th>Repeticiones</th>
                    <th>Descanso</th>
                    <th>Hora</th>
                </tr>
               

                    {{-- @if ($serie->nombre_musculo == "Espalda") --}}
                <tr class="bg-primary">
                    <td>{{ $agrupaciones_ejercicio->id }}</td>
                    <td>{{ $agrupaciones_ejercicio->usuario_id }}</td>
                    <td>{{ $agrupaciones_ejercicio->rutina_id }} kg</td>
                    <td>{{ $agrupaciones_ejercicio->created_at }}</td>
                    <td> seg</td>
                    <td>{{ Carbon\Carbon::createFromTimeString($agrupaciones_ejercicio->updated_at)->format('g:i a')  }}</td>
                    {{ \Carbon\Carbon::parse($agrupaciones_ejercicio->updated_at)->diffForHumans() }}
                    {{-- {{  date('l, d M Y'); }} --}}
                    {{-- {{ \Carbon\Carbon::createFromFormat('m/d/Y',$agrupaciones_ejercicio->updated_at) }} --}}
                </tr>
                    {{-- @endif
                    @if ($agrupaciones_ejercicios->nombre_musculo == "Pecho")
                <tr class="bg-success">
                    <td>{{ $agrupaciones_ejercicios->nombre_musculo }}</td>
                    <td>{{ $agrupaciones_ejercicios->descripcion }}</td>
                    <td>{{ $agrupaciones_ejercicios->peso }} kg</td>
                    <td>{{ $agrupaciones_ejercicios->repeticiones }}</td>
                    <td>{{ $agrupaciones_ejercicios->tiempo_descanso }} seg</td>
                </tr>
                    @endif
                    @if ($agrupaciones_ejercicios->nombre_musculo == "Hombro")
                <tr class="bg-warning">
                    <td>{{ $agrupaciones_ejercicios->nombre_musculo }}</td>
                    <td>{{ $agrupaciones_ejercicios->descripcion }}</td>
                    <td>{{ $agrupaciones_ejercicios->peso }} kg</td>
                    <td>{{ $agrupaciones_ejercicios->repeticiones }}</td>
                    <td>{{ $agrupaciones_ejercicios->tiempo_descanso }} seg</td>
                </tr>
                    @endif
                    @if ($agrupaciones_ejercicios->nombre_musculo == "Piernas")
                <tr class="bg-danger">
                    <td>{{ $agrupaciones_ejercicios->nombre_musculo }}</td>
                    <td>{{ $agrupaciones_ejercicios->descripcion }}</td>
                    <td>{{ $agrupaciones_ejercicios->peso }} kg</td>
                    <td>{{ $agrupaciones_ejercicios->repeticiones }}</td>
                    <td>{{ $agrupaciones_ejercicios->tiempo_descanso }} seg</td>
                </tr>
                    @endif
                    @if ($agrupaciones_ejercicios->nombre_musculo == "Abdominales")
                <tr class="bg-info">
                    <td>{{ $agrupaciones_ejercicios->nombre_musculo }}</td>
                    <td>{{ $agrupaciones_ejercicios->descripcion }}</td>
                    <td>{{ $agrupaciones_ejercicios->peso }} kg</td>
                    <td>{{ $agrupaciones_ejercicios->repeticiones }}</td>
                    <td>{{ $agrupaciones_ejercicios->tiempo_descanso }} seg</td>
                </tr>
                    @endif
                    @if ($agrupaciones_ejercicios->nombre_musculo == "Brazos")
                <tr class="bg-success" style="background-color: blueviolet">
                    <td style="background-color: blueviolet">{{ $agrupaciones_ejercicios->nombre_musculo }}</td>
                    <td style="background-color: blueviolet">{{ $agrupaciones_ejercicios->descripcion }}</td>
                    <td style="background-color: blueviolet">{{ $agrupaciones_ejercicios->peso }} kg</td>
                    <td style="background-color: blueviolet">{{ $agrupaciones_ejercicios->repeticiones }}</td>
                    <td style="background-color: blueviolet">{{ $agrupaciones_ejercicios->tiempo_descanso }} seg</td>
                </tr>
                    @endif --}}
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