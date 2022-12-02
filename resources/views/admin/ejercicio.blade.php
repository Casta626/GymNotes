<!DOCTYPE html>
<html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Crear Ejercicios</title>
    <style>
        .select2-container .select2-selection--single {
            height: 34px !important;
        }

        .select2-container--default .select2-selection--single {
            border: 1px solid #ccc !important;
            border-radius: 0px !important;
        }

        * {
            webkit-appearance: none;
        }
        .es{
            margin-right:20px; 
        }
    </style>
</head>

<body>
    @extends('layouts.app-master')

    @section('content')

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <div class="container">
        <div class="row">

            <form action={{ route('crear.ejercicios') }} method="POST" class="col-md-4">
                <div>
                    <div>
                    <label class="es">Ejercicios</label>
                    <select class="form-control select2">
                        @foreach ($ejercicios as $ejercicio)
                        <option name="ejercicio_id" value="{{$ejercicio->id}}">{{$ejercicio->nombre}}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="es">Musculos</label>
                    <select name="musculo_id" class="form-control select2">
                        @foreach ($musculos as $musculo)
                        <option value="{{$musculo->id}}">{{$musculo->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                </div>
                    <div class="form-group form-floating mb-3" style="margin-top: 250px">
                        <input id='ejercicio' type="text" class="form-control" name="ejercicio"
                            value="{{ old('ejercicio') }}" placeholder="ejercicio" required="required" min="2">
                        <label for="floatingPassword">Introduce el nombre del ejercicio</label>
                        @if ($errors->has('ejercicio'))
                        <span class="text-danger text-left">{{ $errors->first('ejercicio') }}</span>
                        @endif
                    </div>
                    <button href="crear-ejercicios" class="w-100 btn btn-lg btn-danger" 
                    type="submit">Confirmar</button>
            </form>

        </div>
    </div>
    <script>
        $('.select2').select2();
    </script>
    @endsection
</body>

</html>