<!doctype html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1,width=device-width">
	<meta name="format-detection" content="telephone=no">
	<title>Entrenamiento</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lato-font/3.0.0/css/lato-font.min.css">
	<script defer src="js/calendario.js"></script>
	<link href="css/calendario.css" rel="stylesheet">

	
</head>

<body>
	<h1>Entrenamiento</h1>
	<p>Selecciona fecha y hora para continuar</p>
	
	<div class="list-choice">
		<div class="list-choice-title">Selecciona la actividad:</div>
		<div class="list-choice-objects">
			<label>
				<input type="radio" name="month" /> <span>Entrenamiento de Pesas</span>
			</label>
			<label>
				<input type="radio" name="month" /> <span>Deportes</span>
			</label>
			<label>
				<input type="radio" name="month" /> <span>Clases guiadas</span>
			</label>
			<label>
				<input type="radio" name="month" /> <span>Crossfit</span>
			</label>
		</div>
	</div>
    @if ($datos != null)
    <div>Maricon</div>
    @endif

</body>

</html>