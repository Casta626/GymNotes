<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <style>
        p {
            font-size: 25px;
        }
    </style>
</head>

<body>
    @extends('layouts.app-master')

    @section('content')
    <div class="p-5 rounded">

        @guest
        <p>Puedes acceder a todas las herramientas menos <i>"Ejercicios"</i> y <i>"Calendario".</i></p>
        <br>
        <p>Para acceder a ellas debes estar registrado.</p>
        <br>
        <p>En <b><i>"Calendario"</i></b> añades o eliminas los días que vas a entrenar.</p>
        <br>
        <p>En <b><i>"Ejercicios"</i></b> añades o eliminas las series que realizas.</p>
        @endguest

        @auth
        <p>¡Gracias por registrarte!</p>
        <br>
        <p>GymNotes es una página web que ha empezado como un Trabajo Final de Grado y que vamos a
            utilizar mis amigos y yo pero la puede utilizar cualquiera.</p>
        @endauth


    </div>
    @endsection
</body>

</html>