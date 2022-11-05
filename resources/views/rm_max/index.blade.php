<!DOCTYPE html>
<html>

<head>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ asset('css/rmmax.css') }}" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    {{-- <script type="text/javascript" src="{{ asset('js/rmmax.js')  }}"></script> --}}
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

            {{-- @include('layouts.partials.messages') --}}

            <div class="form-group form-floating mb-3">
                <input type="text" class="form-control" name="peso" value="{{ old('peso') }}" placeholder="peso"
                    required="required" autofocus>
                <label for="floatingName">Introduce el peso</label>
                @if ($errors->has('peso'))
                <span class="text-danger text-left">{{ $errors->first('peso') }}</span>
                @endif
            </div>

            <div class="form-group form-floating mb-3">
                <input type="text" class="form-control" name="rep" value="{{ old('rep') }}" placeholder="rep"
                    required="required">
                <label for="floatingPassword">Introduce las repeticiones</label>
                @if ($errors->has('rep'))
                <span class="text-danger text-left">{{ $errors->first('rep') }}</span>
                @endif
            </div>

            <button href="{{ route('rmmax.rmcalculator') }}" class="w-100 btn btn-lg btn-danger" type="submit">Descubre
                tu RM</button>

            {{-- @if (count($resultados) > 0 )
            poner mas cajas de formulario.

            @else

            @endif --}}
            {{-- <div>{{ $resultados[0] }}</div> --}}



            {{-- @include('auth.partials.copy') --}}
            
        </form>

        {{-- Cirulares --}}
        <section class="progress-section">
            <div class="container">
                <div class="row">
                    
                    
                    <div class="col-md-3">
                        <div class="progress-bars">
                            <h2>20 KG</h2>
                        </div>
                        <h2 style="margin-top: 40px;margin-left:2%">44%</h2>
                        <!--progress-bars-->
                    </div>

                    <div class="col-md-3">
                        <div class="progress-bars-four">
                            <h2>40%</h2>
                        </div>
                        <!--progress-bars-->
                    </div>

                    <div class="col-md-3">
                        <div class="progress-bars-six">
                            <h2>65%</h2>
                        </div>
                        <!--progress-bars-->
                    </div>


                    <div class="col-md-3">
                        <div class="progress-bars-seven">
                            <h2>70%</h2>
                        </div>
                        <!--progress-bars-->
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    
                    
                    <div class="col-md-3">
                        <div class="progress-bars">
                            <h2>20 KG</h2>
                        </div>
                        <h2 style="margin-top: 40px;margin-left:2%">44%</h2>
                        <!--progress-bars-->
                    </div>

                    <div class="col-md-3">
                        <div class="progress-bars-four">
                            <h2>40%</h2>
                        </div>
                        <!--progress-bars-->
                    </div>

                    <div class="col-md-3">
                        <div class="progress-bars-six">
                            <h2>65%</h2>
                        </div>
                        <!--progress-bars-->
                    </div>


                    <div class="col-md-3">
                        <div class="progress-bars-seven">
                            <h2>70%</h2>
                        </div>
                        <!--progress-bars-->
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    
                    
                    <div class="col-md-3">
                        <div class="progress-bars">
                            <h2>20 KG</h2>
                        </div>
                        <h2 style="margin-top: 40px;margin-left:2%">44%</h2>
                        <!--progress-bars-->
                    </div>

                    <div class="col-md-3">
                        <div class="progress-bars-four">
                            <h2>40%</h2>
                        </div>
                        <!--progress-bars-->
                    </div>

                    <div class="col-md-3">
                        <div class="progress-bars-six">
                            <h2>65%</h2>
                        </div>
                        <!--progress-bars-->
                    </div>


                    <div class="col-md-3">
                        <div class="progress-bars-seven">
                            <h2>70%</h2>
                        </div>
                        <!--progress-bars-->
                    </div>
                </div>
            </div>
        </section>

        

        {{-- * Barras de progreso
            <div class="progress">

                <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="10" aria-valuemin="0"
                    aria-valuemax="100">25%
                    <script>
                        $(".progress-bar").animate({
                                width: "25%",
                        }, 2500);
                    </script>
                    <div>
                    </div>
                </div>
            </div>

            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar""
                    aria-valuenow=" 25" aria-valuemin="0" aria-valuemax="100">93%
                    <script>
                        $(".progress-bar").animate({
                                width: "93%",
                        }, 2500);
                    </script>
                </div>

            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-info" role="progressbar""
                    aria-valuenow=" 50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar""
                    aria-valuenow=" 75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" %" aria-valuenow="100"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0"
                    aria-valuemax="100"></div>
                <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30"
                    aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <div class="progress progress-striped active">
                <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"
                    style="width: 45%">
                    <span class="sr-only">45% completado</span>
                </div>

            </div> --}}

    </div>
    @endsection
</body>

</html>