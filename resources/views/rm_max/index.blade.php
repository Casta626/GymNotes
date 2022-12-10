<!DOCTYPE html>
<html>

<head>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ asset('css/rmmax.css') }}" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Calculadora-RM</title>
</head>

<body>
    @extends('layouts.app-master')

    @section('content')
        <div class="inicio">
            <form method="get" action="{{ route('rmmax.rmcalculator') }}">
                <div class="centrado">

                    <a href="/"><img src="{!! url('gymnotes.ico') !!}" alt="GymNotes logo"></a>
                </div>

                <h1>Descubre tu RM</h1>

                <div class="form-group form-floating mb-3">
                    <input id='peso' type="number" class="form-control" name="peso" value="{{ old('peso') }}" placeholder="peso" required="required|numeric|min:2" min="1" autofocus>
                    <label for="floatingName">Introduce el peso</label>
                    @if ($errors->has('peso'))
                        <span class="text-danger text-left">{{ $errors->first('peso') }}</span>
                    @endif
                </div>

                <div class="form-group form-floating mb-3">
                    <input id='rep'type="number" class="form-control" name="rep" value="{{ old('rep') }}" placeholder="rep"
                        required="required" max="12" min="2">
                    <label for="floatingPassword">Introduce las repeticiones</label>
                    @if ($errors->has('rep'))
                        <span class="text-danger text-left">{{ $errors->first('rep') }}</span>
                    @endif
                </div>

                <button href="{{ route('rmmax.rmcalculator') }}" class="w-100 btn btn-lg btn-danger" onclick="enviarRM"
                    type="submit">Descubre
                    tu RM</button>

            </form>

            @if ($resultados != null)

            <section class="progress-section" >
                <div class="container">
                    <div class="row">
                </div>
            
            {{-- Cirulares --}}
            <section class="progress-section" >
                <div class="container">
                    <div class="row">


                        <div class="col-md-3">
                            <div class="progress-bars-100">
                                <h2>{{ $resultados[0]}}</h2>
                            </div>
                            <h2 style="margin-top: 40px;margin-left: 10px">100%</h2>
                            <!--progress-bars-->
                        </div>

                        <div class="col-md-3">
                            <div class="progress-bars-95">
                                <h2>{{ $resultados[1]}}</h2>
                            </div>
                            <h2 style="margin-top: 40px;margin-left: 10px">95%</h2>
                            <!--progress-bars-->
                        </div>

                        <div class="col-md-3">
                            <div class="progress-bars-90">
                                <h2>{{ $resultados[2]}}</h2>
                            </div>
                            <h2 style="margin-top: 40px;margin-left: 10px">90%</h2>
                            <!--progress-bars-->
                        </div>


                        <div class="col-md-3">
                            <div class="progress-bars-86">
                                <h2>{{ $resultados[3]}}</h2>
                            </div>
                            <h2 style="margin-top: 40px;margin-left: 10px">86%</h2>
                            <!--progress-bars-->
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">


                        <div class="col-md-3">
                            <div class="progress-bars-82">
                                <h2>{{ $resultados[4]}}</h2>
                            </div>
                            <h2 style="margin-top: 40px;margin-left:2%">82%</h2>
                            <!--progress-bars-->
                        </div>

                        <div class="col-md-3">
                            <div class="progress-bars-78">
                                <h2>{{ $resultados[5]}}</h2>
                            </div>
                            <h2 style="margin-top: 40px;margin-left: 10px">78%</h2>
                            <!--progress-bars-->
                        </div>

                        <div class="col-md-3">
                            <div class="progress-bars-74">
                                <h2>{{ $resultados[6]}}</h2>
                            </div>
                            <h2 style="margin-top: 40px;margin-left: 10px">74%</h2>
                            <!--progress-bars-->
                        </div>


                        <div class="col-md-3">
                            <div class="progress-bars-70">
                                <h2>{{ $resultados[7]}}</h2>
                            </div>
                            <h2 style="margin-top: 40px;margin-left: 10px">70%</h2>
                            <!--progress-bars-->
                        </div>
                    </div>
                </div>

                <div class="container" ">
                    <div class="row">


                        <div class="col-md-3">
                            <div class="progress-bars-65">
                                <h2>{{ $resultados[8]}}</h2>
                            </div>
                            <h2 style="margin-top: 40px;margin-left:2%">65%</h2>
                            <!--progress-bars-->
                        </div>

                        <div class="col-md-3">
                            <div class="progress-bars-61">
                                <h2>{{ $resultados[9]}}</h2>
                            </div>
                            <h2 style="margin-top: 40px;margin-left: 10px">61%</h2>
                            <!--progress-bars-->
                        </div>

                        <div class="col-md-3">
                            <div class="progress-bars-57">
                                <h2>{{ $resultados[10]}}</h2>
                            </div>
                            <h2 style="margin-top: 40px;margin-left: 10px">57%</h2>
                            <!--progress-bars-->
                        </div>


                        <div class="col-md-3">
                            <div class="progress-bars-53">
                                <h2>{{ $resultados[11]}}</h2>
                            </div>
                            <h2 style="margin-top: 40px;margin-left: 10px">53%</h2>
                            <!--progress-bars-->
                        </div>
                    </div>
                </div>
            </section>
            @endif
        </div>
    @endsection
</body>

</html>