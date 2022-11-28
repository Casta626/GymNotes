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

<body>

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
        @foreach ($usuarios as $usuario)
            <div>{{ $usuario }}</div>
            <h1>ay</h1>
        @foreach ($usuario->agrupacionesEjercicios as $agrupacionesEj)
            <div>{{$agrupacionesEj}}</div>
            <h1>ay</h1>
            @foreach ($agrupacionesEj->ejercicioMaquina as $ejMaquina)
                <div>{{$ejMaquina}}</div>
                <h1>ay</h1>
                @foreach ($ejMaquina->serie as $serie)
                    <div>{{$serie}}</div>
                    <h1>{{$serie->id}}</h1>
                @endforeach
            @endforeach
        @endforeach
        <div>
            <h1>{{ ucwords(\Carbon\Carbon::parse(strftime($usuario->created_at))->formatLocalized('%A %d de %B del %Y')) }}
            <h2>{{ $usuario->email }}</h2>
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
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-primary">Crear</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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

            {{-- <tr class="bg-success" style="background-color: #4C2882">
                <td style="background-color: #4C2882">{{ $agEj->id }}</td>
                <td style="background-color: #4C2882">{{ $agEj->descripcion}}</td>
                <td style="background-color: #4C2882"> {{ $agEj->peso }}</td>
                <td style="background-color: #4C2882">{{ $agEj->repeticiones }}</td>
                <td style="background-color: #4C2882">{{ $agEj->tiempo_descanso }}</td>
                <td style="background-color: #4C2882">{{
                    ucwords(\Carbon\Carbon::parse(strftime($agEj->created_at))->diffForHumans(null,null, 1, 1)) }}</td>
            </tr> --}}

            <tr class="bg-success" style="background-color: #4C2882">
                <td style="background-color: #4C2882"> <a class="prueba" href="ejercicio/{{$usuario->id}}">Press Banca</a>
                </td>
                <td style="background-color: #4C2882"> Pecho | hombro </td>
                <td style="background-color: #4C2882"> descripcion </td>
                <td style="background-color: #4C2882"> 80 </td>
                <td style="background-color: #4C2882"> 2 </td>
                <td style="background-color: #4C2882"> 2min </td>
                <td style="background-color: #4C2882">
                    <div style="color: black">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalEdit">
                            +
                        </button>
    
                        <!-- Modal -->
                        <div class="modal fade" id="modalEdit" tabindex="-1"
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
                                        <p>Peso: 75(kg)</p>
                                        <p>Repeticiones: 1</p>
                                        <p>Descanso: 30 seg</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-primary">Crear</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                {{-- <td style="background-color: #4C2882"></td> --}}
            </tr>
        </table>

        @endforeach


    </div>
    @endsection
    @endauth
</body>

</html>