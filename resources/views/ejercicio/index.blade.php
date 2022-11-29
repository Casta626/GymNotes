<!DOCTYPE html>
<html>

<head>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        h1 {
            font-size-adjust: initial;
            text-align: center;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            padding-top: 2%;

        }

        table.ejercicio {
            text-align: center;
            width: 100%;
            font-family: 'Roboto', sans-serif;
            color: white;
            padding: 2%;
        }

        tr,
        td,
        th {
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

        .b {
            color: white;
        }
    </style>
</head>

<body style="width: 100%">

    @extends('layouts.app-master')

    @section('content')
    {{ setlocale(LC_ALL,"es_ES") }}

    {{-- @php
    $idUsuario = Auth::user()->id;
    $agruEj= App\Models\Serie::where('id',$idUsuario)->get();
    @endphp --}}
    

    @guest

        <h1>La de loguearte te la sabes? Máquina.</h1>
    @endguest

    @auth
    <div>
@php
    $contador = 0;
@endphp
        <div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                style="float: right;">
                Nuevo entrenamiento
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white">Selecciona fecha y tipo</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close" style="background-color: white"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger"
                                data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Crear</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($usuarios as $usuario)
        <div>
            <h1>{{ ucwords(\Carbon\Carbon::parse(strftime($usuario->created_at))->formatLocalized('%A %d de %B del %Y')) }}
            </h1>
            {{ ucwords(\Carbon\Carbon::parse(strftime($usuario->created_at))->diffForHumans(null,null, 1, 1)) }}
        </div>
        {{-- *Añadir Modales https://makitweb.com/dynamically-load-content-in-bootstrap-modal-laravel-9/ --}}
        {{-- * Modales Boostrap https://getbootstrap.com/docs/5.2/components/modal/ --}}
        {{-- Todo https://www.itsolutionstuff.com/post/laravel-9-fullcalendar-ajax-tutorial-exampleexample.html --}}

        {{-- @if ($usuario->nombre_musculo == "Espalda") --}}
        <table class="ejercicio">
            <tr class="bg-dark">
                <th>Ejercicio</th>
                <th>Músculo</th>
                <th>Descripción</th>
                <th>Peso</th>
                <th>Repeticiones</th>
                <th>Descanso</th>
                <th>Editar</th>
                {{-- <th>Hora</th> --}}
            </tr>
        @foreach ($usuario->agrupacionesEjercicios as $agrupacionesEj)
            @foreach ($agrupacionesEj->ejercicioMaquina as $ejMaquina)
                @foreach ($ejMaquina->serie as $serie)

                <tr class="bg-success" style="background-color: #4C2882">
                    <td style="background-color: #4C2882"> <a class="prueba" href="ejercicio/{{$usuario->id}}">Press Banca</a>
                    </td>
                    <td style="background-color: #4C2882"> Pecho | hombro </td>
                    <td style="background-color: #4C2882"> {{ $serie->descripcion}} </td>
                    <td style="background-color: #4C2882"> {{ $serie->peso}} </td>
                    <td style="background-color: #4C2882"> {{ $serie->repeticiones}} </td>
                    <td style="background-color: #4C2882"> {{ $serie->tiempo_descanso}} </td>
                    <td style="background-color: #4C2882">
                        <div style="color: black">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalEdit{{ $contador }}">
                                +
                            </button>
        
                            <!-- Modal -->
                            <div class="modal fade" id="modalEdit{{ $contador }}" tabindex="-1"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-success b">
                                            <h1 class="modal-title fs-5">Edita los campos</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body" style="text-align: start;">
                                            <p>Ejercicio: press banca</p>
                                            <p>Peso: {{ $serie->peso}} kg</p>
                                            <p>Repeticiones: {{ $serie->repeticiones}}</p>
                                            <p>Descanso: {{ $serie->tiempo_descanso}} seg</p>
                                            <p>Descripción: {{ $serie->descripcion}}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Cerrar</button>
                                            <button type="button" class="btn btn-primary">Crear</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @php
                $contador++;
            @endphp
                @endforeach
            @endforeach
        @endforeach
        @endforeach
    </table>
    </div>
    @endsection
    @endauth
</body>

</html>