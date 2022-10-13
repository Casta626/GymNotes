@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">

        @guest
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest

        @auth
        {{-- * Modo admin --}}
        @if(auth()->user()->id ==2)
        <div style="text-align: center">
        <h1>Usted está en el modo admin</h1>
        <h2>Hola, {{ auth()->user()->nombre }} {{ auth()->user()->apellido1 }} {{ auth()->user()->apellido2 }}</h2>
        <h2>Su id es: {{ auth()->user()->id }} y es conocido como {{ auth()->user()->username }}</h2>
        <h2>Su email es {{ auth()->user()->email }}, su teléfono es {{ auth()->user()->telefono }}</h2>
        <h2>Es de {{ auth()->user()->pais }}</h2>
        <h2>Su contraseña con hash es: {{ auth()->user()->password }}</h2>
        </div>
        @else
        <h1>Dashboard</h1>
        <p class="lead">Only authenticated users can access this section.</p>
        <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button">View more tutorials here &raquo;</a>
        @endif
        @endauth

        
    </div>
@endsection