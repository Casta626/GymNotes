<!DOCTYPE html>
<html>

<head>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{ asset('css/rmmax.css') }}" rel="stylesheet" type="text/css">

    {{-- <script type="text/javascript" src="{{ asset('js/rmmax.js')  }}"></script> --}}
    <title>Calculadora-RM</title>
</head>

<body>
@extends('layouts.app-master')

@section('content')

    <form method="get" action="{{ route('rmmax.rmcalculator') }}">
        
        
        <div class="centrado"><img class="mb-4 mitad" src="{!! url('gymnotes.ico') !!}" alt="GymNotes logo"></div>
        
        <h1>Descubre tu RM</h1>

        {{-- @include('layouts.partials.messages') --}}

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="peso" value="{{ old('peso') }}" placeholder="peso" required="required" autofocus>
            <label for="floatingName">Introduce el peso</label>
            @if ($errors->has('peso'))
                <span class="text-danger text-left">{{ $errors->first('peso') }}</span>
            @endif
        </div>
        
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="rep" value="{{ old('rep') }}" placeholder="rep" required="required">
            <label for="floatingPassword">Introduce las repeticiones</label>
            @if ($errors->has('rep'))
                <span class="text-danger text-left">{{ $errors->first('rep') }}</span>
            @endif
        </div>

        <button href="{{ route('rmmax.rmcalculator') }}" class="w-100 btn btn-lg btn-danger" type="submit">Descubre tu RM</button>

        {{-- @if (count($resultados) > 0 )
        poner mas cajas de formulario.
            
        @else
            
        @endif --}}
        {{-- <div>{{ $resultados[0] }}</div> --}}

        
        
        {{-- @include('auth.partials.copy') --}}
    </form>
@endsection
</body>
</html>