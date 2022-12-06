<!DOCTYPE html>
<html>

<head>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

        td {
            /* https://www.svgbackgrounds.com/ */
            background-color: #110933;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 800 800'%3E%3Cg fill='none' stroke='%230C0944' stroke-width='4.7'%3E%3Cpath d='M769 229L1037 260.9M927 880L731 737 520 660 309 538 40 599 295 764 126.5 879.5 40 599-197 493 102 382-31 229 126.5 79.5-69-63'/%3E%3Cpath d='M-31 229L237 261 390 382 603 493 308.5 537.5 101.5 381.5M370 905L295 764'/%3E%3Cpath d='M520 660L578 842 731 737 840 599 603 493 520 660 295 764 309 538 390 382 539 269 769 229 577.5 41.5 370 105 295 -36 126.5 79.5 237 261 102 382 40 599 -69 737 127 880'/%3E%3Cpath d='M520-140L578.5 42.5 731-63M603 493L539 269 237 261 370 105M902 382L539 269M390 382L102 382'/%3E%3Cpath d='M-222 42L126.5 79.5 370 105 539 269 577.5 41.5 927 80 769 229 902 382 603 493 731 737M295-36L577.5 41.5M578 842L295 764M40-201L127 80M102 382L-261 269'/%3E%3C/g%3E%3Cg fill='%230A5553'%3E%3Ccircle cx='769' cy='229' r='5'/%3E%3Ccircle cx='539' cy='269' r='5'/%3E%3Ccircle cx='603' cy='493' r='5'/%3E%3Ccircle cx='731' cy='737' r='5'/%3E%3Ccircle cx='520' cy='660' r='5'/%3E%3Ccircle cx='309' cy='538' r='5'/%3E%3Ccircle cx='295' cy='764' r='5'/%3E%3Ccircle cx='40' cy='599' r='5'/%3E%3Ccircle cx='102' cy='382' r='5'/%3E%3Ccircle cx='127' cy='80' r='5'/%3E%3Ccircle cx='370' cy='105' r='5'/%3E%3Ccircle cx='578' cy='42' r='5'/%3E%3Ccircle cx='237' cy='261' r='5'/%3E%3Ccircle cx='390' cy='382' r='5'/%3E%3C/g%3E%3C/svg%3E");
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

        .select2-container .select2-selection--single {
            height: 34px !important;
        }

        .select2-container--default .select2-selection--single {
            border: 1px solid #ccc !important;
            border-radius: 0px !important;
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
        @foreach ($usuarios as $usuario)
        @foreach ($usuario->agrupacionesEjercicios as $agrupacionesEj)
        <div>

            <div style="color: black">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#modalNew{{ $contador }}" style="float: right">
                    Nuevo entrenamiento
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modalNew{{ $contador }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-primary b">
                                <h1 class="modal-title fs-5">Seleccione el ejercicio que va a hacer:</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="text-align: start;">
                                <form action="/ejercicios" method="post">
                                    @csrf
                                    <input type="hidden" name="fecha" value="{{$agrupacionesEj->fecha}}" id="{{$agrupacionesEj->fecha}}">
                                    <input type="hidden" name="tipo" value="new">
                                    <input type="text" placeholder="Ejercicio" name="ejercicio">
                                    {{-- <div style="z-index: 999">
                                    <link
                                        href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css"
                                        rel="stylesheet" />
                                    <script
                                        src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js">
                                    </script>
                                    <div class="container" style="z-index: 999">
                                        <div class="row" style="z-index: 999">
                                            <form class="col-md-4" style="z-index: 999">
                                                <label style="z-index: 999">Ejercicios</label>
                                                <select class="form-control select2" style="z-index: 999">
                                                    @foreach ($ejercicios as $ejercicio)
                                                    <option value="{{$ejercicio->id}}" style="z-index: 999">
                                                        {{$ejercicio->nombre}}</option>
                                                    @endforeach
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    $('.select2').select2();
                                </script> --}}                                    
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger"
                                    data-bs-dismiss="modal">Cerrar</button>
                                <input type="submit" class="btn btn-primary"></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

            <h1>{{ ucwords(\Carbon\Carbon::parse(strftime($agrupacionesEj->fecha))->formatLocalized('%A %d de %B del %Y')) }}</h1>
            {{ ucwords(\Carbon\Carbon::parse(strftime($agrupacionesEj->fecha))->diffForHumans(null,null, 1, 1)) }}
        </div>
        {{-- *Añadir Modales https://makitweb.com/dynamically-load-content-in-bootstrap-modal-laravel-9/ --}}
        {{-- * Modales Boostrap https://getbootstrap.com/docs/5.2/components/modal/ --}}
        {{-- Todo https://www.itsolutionstuff.com/post/laravel-9-fullcalendar-ajax-tutorial-exampleexample.html --}}

        {{-- @if ($usuario->nombre_musculo == "Espalda") --}}
        <table class="ejercicio" style="margin-bottom: 50px;">
            <tr class="bg-dark">
                <th>Ejercicio</th>
                <th>Músculo</th>
                <th>Descripción</th>
                <th>Peso</th>
                <th>Repeticiones</th>
                <th>Descanso</th>
                <th>Editar</th>
                <th>Borrar</th>
                {{-- <th>Hora</th> --}}
            </tr>
            @foreach ($agrupacionesEj->ejercicioMaquina as $ejMaquina)
            @foreach ($ejMaquina->serie as $serie)

            <tr class="bg-success">
                <td> <a class="prueba" href="ejercicio#{{$ejMaquina->ejercicio->id}}">
                        {{ $ejMaquina->ejercicio->nombre }} </a>
                </td>

                <td> {{ $ejMaquina->ejercicio->musculo->nombre }} </td>
                <td> {{ $serie->descripcion}} </td>
                <td> {{ $serie->peso}} </td>
                <td> {{ $serie->repeticiones}} </td>
                <td> {{ $serie->tiempo_descanso}} </td>
                <td>
                    <div style="color: black">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
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
                                        <p>Fecha: {{ $agrupacionesEj->fecha }}</p>
                                        <form action="/ejercicios" method="put">
                                            @csrf
                                            <input type="hidden" name="fecha" value="{{$agrupacionesEj->fecha}}" id="{{$agrupacionesEj->fecha}}">
                                            <input type="hidden" name="tipo" value="edit">
                                            <input type="text" placeholder="Ejercicio" name="ejercicio">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Cerrar</button>
                                        <input type="submit" class="btn btn-success"></button>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>



                <td>
                    <div style="color: black">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#modalClose{{ $contador }}">
                            -
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modalClose{{ $contador }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-danger b">
                                        <h1 class="modal-title fs-5">¿Está seguro que quiere borrar estos campos?</h1>
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
                                        <button type="button" class="btn btn-primary"
                                            data-bs-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-danger">Borrar</button>
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
        </table>
        @endforeach
        @endforeach
    </div>
    @endsection
    @endauth
</body>

</html>