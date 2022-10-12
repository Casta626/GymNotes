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
        
        {{-- <h1>Semana 1 03/10/2022-09/10/2022</h1> --}}
        {{-- <h1>{{ ucwords(\Carbon\Carbon::parse(strftime($agrupaciones_ejercicio->updated_at))->formatLocalized('%A %d de %B del %Y')) }}</h1> --}}
        
        
        <table class="ejercicio">
                <tr class="bg-dark">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Grupo muscular</th>
                </tr>
               
                @foreach($musculos as $musculo)
                    @if ($musculo->grupo_muscular == "Espalda")
                    <tr class="bg-primary">
                        <td>{{ $musculo->id }}</td>
                        <td>{{ $musculo->nombre }}</td>
                        <td>{{ $musculo->grupo_muscular }}</td>
                    </tr>
                        @endif
                        @if ($musculo->grupo_muscular == "Pecho")
                    <tr class="bg-success">
                        <td>{{ $musculo->id }}</td>
                        <td>{{ $musculo->nombre }}</td>
                        <td>{{ $musculo->grupo_muscular }}</td>
                    </tr>
                        @endif
                        @if ($musculo->grupo_muscular == "Hombro")
                    <tr class="bg-warning">
                        <td>{{ $musculo->id }}</td>
                        <td>{{ $musculo->nombre }}</td>
                        <td>{{ $musculo->grupo_muscular }}</td>
                    </tr>
                        @endif
                        @if ($musculo->grupo_muscular == "Piernas")
                    <tr class="bg-danger">
                        <td>{{ $musculo->id }}</td>
                        <td>{{ $musculo->nombre }}</td>
                        <td>{{ $musculo->grupo_muscular }}</td>
                    </tr>
                        @endif
                        @if ($musculo->grupo_muscular == "Abdomen")
                    <tr class="bg-info">
                        <td>{{ $musculo->id }}</td>
                        <td>{{ $musculo->nombre }}</td>
                        <td>{{ $musculo->grupo_muscular }}</td>
                    </tr>
                        @endif
                        @if ($musculo->grupo_muscular == "Biceps")
                    <tr class="bg-success" style="background-color: blueviolet">
                        <td style="background-color: blueviolet">{{ $musculo->id }}</td>
                        <td style="background-color: blueviolet">{{ $musculo->nombre }}</td>
                        <td style="background-color: blueviolet">{{ $musculo->grupo_muscular }}</td>
                    </tr>
                        @endif

                        @if ($musculo->grupo_muscular == "Triceps")
                    <tr class="bg-success" style="background-color: blueviolet">
                        <td style="background-color: blueviolet">{{ $musculo->id }}</td>
                        <td style="background-color: blueviolet">{{ $musculo->nombre }}</td>
                        <td style="background-color: blueviolet">{{ $musculo->grupo_muscular }}</td>
                    </tr>
                        @endif

                        @if ($musculo->grupo_muscular == "Antebrazo")
                    <tr class="bg-success" style="background-color: blueviolet">
                        <td style="background-color: blueviolet">{{ $musculo->id }}</td>
                        <td style="background-color: blueviolet">{{ $musculo->nombre }}</td>
                        <td style="background-color: blueviolet">{{ $musculo->grupo_muscular }}</td>
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