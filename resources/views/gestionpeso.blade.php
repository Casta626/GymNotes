<!doctype html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1,width=device-width">
	<meta name="format-detection" content="telephone=no">
	<title>Gestión de Peso</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lato-font/3.0.0/css/lato-font.min.css">
	<script defer src="js/calendario.js"></script>
	<link href="css/gestionpeso.css" rel="stylesheet">

	<style>
		/* CHECKBOX TOGGLE SWITCH */
		/* @apply rules for documentation, these do not work as inline style */
		.toggle-checkbox:checked {
			@apply: right-0 border-green-400;
			right: 0;
			border-color: #68D391;
		}

		.toggle-checkbox:checked+.toggle-label {
			@apply: bg-green-400;
			background-color: #68D391;
		}
	</style>
</head>

<body>
	@extends('layouts.app-master')

	@section('content')
	<form method="get" action="{{ route('gestionPeso.calculadora') }}">
		<div class="centrado">
			<a href="/"><img class="centrado" src="{!! url('gymnotes.ico') !!}" alt="GymNotes logo"></a>
		</div>

		<h1 style="margin-top: 20px;">Descubre tus calorías necesarias</h1>
		<p style="margin-bottom: 25px;">Aquí puedes averiguar tus calorías de mantenimiento, con esa información puedes
			saber cuantas calorías necesitarias
			para hacer un volumen o definición, para ello agrega o resta 300 calorías a lo obtenido, para ganar o perder
			0,25 kg
			a la semana, esta cantidad es acumulable pero no es recomendable ganar o perder mas de 1kg a la semana.
		</p>

		<div style="display: flex">

			<div class="list-choice" style="margin-bottom: 220px">
				<div class="list-choice-title">Actividad:</div>
				<div class="list-choice-objects">
					<label>
						<input type="radio" name="tipoTMB" value="Nada" required="required"/> <span>Nada</span>
					</label>
					<label>
						<input type="radio" name="tipoTMB" value="Ligero" /> <span>Ligero (1-3 días/semana)</span>
					</label>
					<label>
						<input type="radio" name="tipoTMB" value="Moderado" /> <span>Moderado (3-5 días/semana)</span>
					</label>
					<label>
						<input type="radio" name="tipoTMB" value="Fuerte" /> <span>Fuerte (6-7 días/semana)</span>
					</label>
					<label>
						<input type="radio" name="tipoTMB" value="Muy Fuerte" /> <span>Muy fuerte (Dos veces al
							día)</span>
					</label>
				</div>
			</div>

			<div style="display: inline-block">

				<div class="form-group form-floating mb-3">
					<input id='peso' type="number" class="form-control" name="peso" value="{{ old('peso') }}"
						placeholder="peso" required="required|numeric|min:2" min="1" autofocus>
					<label for="floatingName">Tus kg</label>
					@if ($errors->has('peso'))
					<span class="text-danger text-left">{{ $errors->first('peso') }}</span>
					@endif
				</div>

				<div class="form-group form-floating mb-3">
					<input id='altura' type="number" class="form-control" name="altura" value="{{ old('altura') }}"
						placeholder="altura" required="required" min="2">
					<label for="floatingPassword">Tus cm</label>
					@if ($errors->has('altura'))
					<span class="text-danger text-left">{{ $errors->first('altura') }}</span>
					@endif
				</div>

				<div class="form-group form-floating mb-3">
					<input id='edad' type="number" class="form-control" name="edad" value="{{ old('edad') }}"
						placeholder="edad" required="required" min="2">
					<label for="floatingPassword">Tus año</label>
					@if ($errors->has('edad'))
					<span class="text-danger text-left">{{ $errors->first('edad') }}</span>
					@endif
				</div>

			</div>

			<div class="list-choice" style="margin-bottom: 20px">
				<div class="list-choice-title">Cuerpo:</div>
				<div class="list-choice-objects">
					<label>
						<input type="radio" name="genero" value="hombre" required="required"/> <span>Hombre</span>
					</label>
					<label>
						<input type="radio" name="genero" value="mujer" required="required"/> <span>Mujer</span>
					</label>
				</div>
			</div>
		</div>

		@if ($datos != null)
	<table>
		<tr class="bg-dark" style="padding: 25px">

			{{-- Todo Lo comentado es para la versión móvil --}}
			{{-- <th>Def. 0,75kg/S</th> --}}
			{{-- <th>Def. 0,50kg/S</th> --}}
			<th>Def. 0,25kg/Semana</th>
			<th>Mantenimiento</th>
			<th>Vol. 0,25kg/Semana</th>
			{{-- <th>Vol. 0,50kg/S</th> --}}
			{{-- <th>Vol. 0,75kg/S</th> --}}
		</tr>
		<tr class="bg-success">
			{{-- <td>{{ $datos['caloriasTMB'] - 900 }} calorías</td> --}}
			{{-- <td>{{ $datos['caloriasTMB'] - 600 }} calorías</td> --}}
			<td>{{ $datos['caloriasTMB'] - 300 }} calorías</td>
			<td>{{ $datos['caloriasTMB'] }} calorías</td>
			<td>{{ $datos['caloriasTMB'] + 300 }} calorías</td>
			{{-- <td>{{ $datos['caloriasTMB'] + 600 }} calorías</td> --}}
			{{-- <td>{{ $datos['caloriasTMB'] + 900 }} calorías</td> --}}
		</tr>
	</table>
	@endif

		<button href="{{ route('gestionPeso.calculadora') }}" class="w-100 btn btn-lg btn-danger" onclick="enviarRM"
			type="submit">Confirmar</button>
	</form>

	

	@endsection
</body>

</html>