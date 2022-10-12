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

    div.noticia {
    width: 100%;
    margin: 20px auto;
    background-color:#ffc107;
    color: #fff;
    padding: 15px;
    }

    div.noticia img.izquierda {
    float: left;
    margin-right: 15px;
    }

    div.noticia img.derecha {
    float: right;
    margin-left: 15px;
    }

    div.reset {
    clear: both;
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
            
            </table>

            @foreach($musculos as $musculo)
            {{-- <div>
                @if($musculo->id == 1)
                <h1 style="margin-top: 5%">Músculo: {{ $musculo->nombre }} </h1>
                <h1>Grupo muscular: {{ $musculo->grupo_muscular }} </h1>
                <p>Descripción: El músculo sirve para x, se usa en ...</p>
                <IMG SRC="http://trsmart.weebly.com/uploads/2/9/2/7/29274265/6598559_orig.jpg">
                @endif
            </div> --}}

            @if($musculo->id == 1)
            {{-- <div class="noticia">
                <img class="izquierda" src="http://orig11.deviantart.net/46ea/f/2010/018/7/5/avatar_by_chiron178.png">
                <aside>Lo que queremos hacer es colocar este texto al lado derecho de la imagen, algo así como se observa en periódicos o revistas.</aside>
                <div class="reset"></div>
              </div> --}}
              
              <div class="noticia">
                <img class="derecha" src="http://trsmart.weebly.com/uploads/2/9/2/7/29274265/6598559_orig.jpg">
                <aside>Descripción: El músculo sirve para x, se usa en ...</aside>
                <div class="reset"></div>
              </div>
              
              {{-- <div class="noticia">
                <aside>Las imágenes fueron tomadas de DevinatArt y los créditos son de sus respectivos autores. Gracias.</aside>
                <div class="reset"></div>
              </div> --}}
              @endif
            @endforeach

        </div>
    @endsection
    </body>
    </html>