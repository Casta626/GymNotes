<!doctype html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1,width=device-width">
	<meta name="format-detection" content="telephone=no">
	<title>Entrenamiento</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lato-font/3.0.0/css/lato-font.min.css">
	<script defer src="js/calendario.js"></script>
	<link href="css/gestionpeso.css" rel="stylesheet">


</head>

<body>
	@extends('layouts.app-master')

	@section('content')
	<form method="get" action="{{ route('gestionPeso.calculadora') }}">
		<div class="centrado">
			<a href="/"><img src="{!! url('gymnotes.ico') !!}" alt="GymNotes logo"></a>
		</div>

		<h1>Descubre tus calorías necesarias</h1>

		<div class="form-group form-floating mb-3">
			<input id='peso' type="number" class="form-control" name="peso" value="{{ old('peso') }}" placeholder="peso"
				required="required|numeric|min:2" min="1" autofocus>
			<label for="floatingName">Introduce tu peso</label>
			@if ($errors->has('peso'))
			<span class="text-danger text-left">{{ $errors->first('peso') }}</span>
			@endif
		</div>

		<div class="form-group form-floating mb-3">
			<input id='altura' type="number" class="form-control" name="altura" value="{{ old('altura') }}" placeholder="altura"
				required="required" max="12" min="2">
			<label for="floatingPassword">Introduce tu altura</label>
			@if ($errors->has('altura'))
			<span class="text-danger text-left">{{ $errors->first('altura') }}</span>
			@endif
		</div>

		<div class="form-group form-floating mb-3">
			<input id='edad' type="number" class="form-control" name="edad" value="{{ old('edad') }}" placeholder="edad"
				required="required" max="12" min="2">
			<label for="floatingPassword">Introduce tu edad</label>
			@if ($errors->has('edad'))
			<span class="text-danger text-left">{{ $errors->first('edad') }}</span>
			@endif
		</div>

		<div style="display: flex">
		<div class="list-choice" style="margin-bottom: 300px">
			<div class="list-choice-title">Selecciona la actividad:</div>
			<div class="list-choice-objects">
				<label>
					<input type="radio" name="month" /> <span>Nada</span>
				</label>
				<label>
					<input type="radio" name="month" /> <span>Ligero (1-3 días/semana)</span>
				</label>
				<label>
					<input type="radio" name="month" /> <span>Moderado (3-5 días/semana)</span>
				</label>
				<label>
					<input type="radio" name="month" /> <span>Fuerte (6-7 días/semana)</span>
				</label>
				<label>
					<input type="radio" name="month" /> <span>Muy fuerte (Dos veces al día)</span>
				</label>
			</div>
		</div>

		<div class="list-choice" style="margin-bottom: 20px">
			<div class="list-choice-title">Cuerpo biológico</div>
			<div class="list-choice-objects">
				<label>
					<input type="radio" name="month" /> <span>Hombre</span>
				</label>
				<label>
					<input type="radio" name="month" /> <span>Mujer</span>
				</label>
			</div>
		</div>
	</div>

		<button href="{{ route('gestionPeso.calculadora') }}" class="w-100 btn btn-lg btn-danger" onclick="enviarRM"
			type="submit">Confirmar</button>
	</form>
	@if ($datos != null)
	<div>Maricon</div>
	@endif

	@endsection
</body>

</html>