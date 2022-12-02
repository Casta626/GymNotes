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
    </style>
</head>

<body>
    @extends('layouts.app-master')

    @section('content')

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <div class="container">
        <div class="row">
            <form class="col-md-4">
                <label>Ejercicios</label>
                <select class="form-control select2">
                    @foreach ($ejercicios as $ejercicio)
                        <option value="{{$ejercicio->id}}">{{$ejercicio->nombre}}</option>
                    @endforeach
                </select>
            </form>
        </div>
    </div>
    <script>
        $('.select2').select2();
    </script>
    @endsection
</body>

</html>