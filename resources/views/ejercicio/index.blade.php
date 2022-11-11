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
        padding-top: 2%;
        
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

    .prueba {
        text-decoration: none;
        color: white;
    }

    .prueba:hover {
        text-decoration: none;
        color: white;
    }

</style>
</head>
<body>
    
@extends('layouts.app-master')

@section('content')
{{ setlocale(LC_ALL,"es_ES")  }}

{{-- @php
    $idUsuario = Auth::user()->id;
    $agruEj= App\Models\Serie::where('id',$idUsuario)->get();
@endphp --}}

    <div>
        @foreach ($agrupaciones_ejercicios as $agEj)

        <div>
            <h1 >{{ ucwords(\Carbon\Carbon::parse(strftime($agEj->updated_at))->formatLocalized('%A %d de %B del %Y')) }}</h1>
            {{ ucwords(\Carbon\Carbon::parse(strftime($agEj->created_at))->diffForHumans(null,null, 1, 1)) }}
        </div>
        
        
        {{-- @if ($serie->nombre_musculo == "Espalda") --}}
        <table class="ejercicio">
            <tr class="bg-dark">
                <th>Ejercicio</th>
                <th>Músculo</th>
                <th>Descripción</th>
                <th>Peso</th>
                <th>Repeticiones</th>
                <th>Descanso</th>
                {{-- <th>Hora</th> --}}
            </tr>

            {{-- <tr class="bg-success" style="background-color: #4C2882">
                <td style="background-color: #4C2882">{{ $agEj->id }}</td>
                <td style="background-color: #4C2882">{{ $agEj->descripcion}}</td>
                <td style="background-color: #4C2882"> {{ $agEj->peso }}</td>
                <td style="background-color: #4C2882">{{ $agEj->repeticiones }}</td>
                <td style="background-color: #4C2882">{{ $agEj->tiempo_descanso }}</td>
                <td style="background-color: #4C2882">{{ ucwords(\Carbon\Carbon::parse(strftime($agEj->created_at))->diffForHumans(null,null, 1, 1)) }}</td>
            </tr> --}}

            <tr class="bg-success" style="background-color: #4C2882">
                <td style="background-color: #4C2882"> <a class="prueba" href="ejercicio/{{$agEj->id}}">Press Banca</a> </td>
                <td style="background-color: #4C2882"> Pecho | hombro </td>
                <td style="background-color: #4C2882"> descripcion </td>
                <td style="background-color: #4C2882"> 80 </td>
                <td style="background-color: #4C2882"> 2 </td>
                <td style="background-color: #4C2882"> 2min </td>
                {{-- <td style="background-color: #4C2882"></td> --}}
            </tr>
        </table>
            
        @endforeach

    
    </div>
@endsection
</body>
</html>