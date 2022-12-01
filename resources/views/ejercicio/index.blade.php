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

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .list-choice {
            width: 300px;
            margin: 1em auto;
            position: relative;
            cursor: pointer;
        }

        .list-choice input[type="radio"] {
            position: absolute;
            left: -9999px;
        }

        .list-choice-title {
            width: 100%;
            display: block;
            background: #dc3545;
            text-align: center;
            padding: 0.55em 1em;
            box-sizing: border-box;
            color: #FFF;
            text-shadow: 0 1px 0 #CACACA;
            border-radius: 0.2em;
        }

        .list-choice:hover .list-choice-title {
            border-radius: 0.2em 0.2em 0 0;
        }

        .list-choice-objects label:nth-last-of-type(1) span {
            border-radius: 0 0 0.2em 0.2em;
        }

        .list-choice input[type="radio"]+span {
            color: #FFF;
            background: #dc3545;
            padding: 0.55em 1em;
            display: block;
            text-align: center;
            box-sizing: border-box;
            cursor: pointer;
            width: 100%;
        }

        .list-choice-objects {
            position: absolute;
            top: 0;
            padding-top: 2.1em;
            box-sizing: border-box;
            width: 100%;
            overflow: hidden;
            max-height: 0;
            transition: all 250ms ease;
        }

        .list-choice:hover .list-choice-objects input[type="radio"]+span {
            position: relative;
            top: 0;
            transition: all 250ms ease-in-out;
        }

        .list-choice:hover input[type="radio"]+span:hover {
            background: #0b5ed7;
        }

        .list-choice:hover input[type="radio"]:checked+span:hover {
            background: #74D68E;
        }

        .list-choice input[type="radio"]:checked+span {
            background: #dc3545;
            position: absolute;
            top: 0em;
            border-radius: 0.2em;
        }

        .list-choice:hover input[type="radio"]:checked+span {
            border-radius: 0;
        }

        .list-choice:hover .list-choice-objects label:nth-last-of-type(1) input[type="radio"]:checked+span {
            border-radius: 0 0 0.2em 0.2em;
        }

        .list-choice:hover .list-choice-objects {
            max-height: 540px;
        }

        .list-choice-objects>label {
            display: block;
        }

        * {
            font-family: 'Roboto', sans-serif;
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
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white">Selecciona fecha y
                                tipo</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                style="background-color: white"></button>
                        </div>
                        <div class="modal-body">
                            <div class="list-choice" style="margin-bottom: 220px">
                                <div class="list-choice-title">Ejercicios:</div>
                                <div class="list-choice-objects">
                                    @foreach ($ejercicio as $ej)
                                    <label>
                                        <input type="radio" name="tipoTMB" value="{{$ej->nombre}}" required="required" />
                                        <span>{{$ej->nombre}}</span>
                                    </label>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Crear</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        @foreach ($usuarios as $usuario)
        <div>
            <h1>{{ ucwords(\Carbon\Carbon::parse(strftime($usuario->created_at))->formatLocalized('%A %d de %B del %Y'))
                }}
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

            {{-- @foreach ($ejercicio_musculo as $ej_m)
            <div>{{ $ej_m->musculo->nombre }}</div>
            @endforeach --}}

            @foreach ($usuario->agrupacionesEjercicios as $agrupacionesEj)
            @foreach ($agrupacionesEj->ejercicioMaquina as $ejMaquina)
            @foreach ($ejMaquina->serie as $serie)

            <tr class="bg-success" style="background-color: #4C2882">
                <td style="background-color: #4C2882"> <a class="prueba" href="ejercicio#{{$ejMaquina->ejercicio->id}}">
                        {{ $ejMaquina->ejercicio->nombre }} </a>
                </td>

                <td style="background-color: #4C2882"> {{ $ejMaquina->ejercicio->musculo->nombre }} </td>
                <td style="background-color: #4C2882"> {{ $serie->descripcion}} </td>
                <td style="background-color: #4C2882"> {{ $serie->peso}} </td>
                <td style="background-color: #4C2882"> {{ $serie->repeticiones}} </td>
                <td style="background-color: #4C2882"> {{ $serie->tiempo_descanso}} </td>
                <td style="background-color: #4C2882">
                    <div style="color: black">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                            data-bs-target="#modalEdit{{ $contador }}">
                            +
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modalEdit{{ $contador }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-success b">
                                        <h1 class="modal-title fs-5">Edita los campos</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" style="text-align: start;">
                                        <p>Ejercicio: {{ $ejMaquina->ejercicio->nombre }}</p>
                                        <p>Peso: {{ $serie->peso}} kg</p>
                                        <p>Repeticiones: {{ $serie->repeticiones}}</p>
                                        <p>Descanso: {{ $serie->tiempo_descanso}} seg</p>
                                        <p>Descripción: {{ $serie->descripcion}}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-success">Editar</button>
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