<!DOCTYPE html>
<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{ asset('css/musculo.css')}}" rel="stylesheet" type="text/css">

    {{-- <script type="text/javascript" src="{{ asset('js/script.js')  }}"></script> --}}

</head>
<body>
    
@extends('layouts.app-master')

@section('content')

    {{-- ! EN EL RESPONSIVE PONER QUE CADA CARTA/MUSCLO SE PASE DESLIZANDOSE A UN LADO --}}

    {{-- TODO EN EL RESPONSIVE PONER QUE CADA CARTA/MUSCLO SE PASE DESLIZANDOSE A UN LADO --}}

    {{-- Todo Hacer un menú desplegable en el navbar y poner ahí los mmúsculos --}}

{{ setlocale(LC_ALL,"es_ES")  }}
<div style="background-image: url(https://media.istockphoto.com/vectors/fitness-seamless-pattern-black-and-white-vector-id1201068471?b=1&k=6&m=1201068471&s=170667a&w=0&h=D8_YZTJS-JChqfWp-R-nWU6x-E1w1Tt4X0P4fANsJXc=);">
    <h1>Hombro</h1>
    <div class="grupo">
        <div  class="card carta">
            <img class="card-img-top" src="https://c8.alamy.com/compes/g1hd32/los-musculos-deltoides-anterior-anatomia-musculos-aislados-en-blanco-ilustracion-3d-g1hd32.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Deltoides frontal</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#antebrazo" class="btn btn-primary espacio">Ejercicios Deltoides frontal</a>
              <a href="#" class="btn btn-secondary">Ejercicios para Hombro</a>
            </div>
        </div>

        <div  class="card" style="width: 18rem; margin:0px auto;">
            <img class="card-img-top" src="https://c8.alamy.com/compes/g1hd32/los-musculos-deltoides-anterior-anatomia-musculos-aislados-en-blanco-ilustracion-3d-g1hd32.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Deltoides frontal</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary espacio">Ejercicios Deltoides frontal</a>
              <a href="#" class="btn btn-secondary">Ejercicios para Hombro</a>
            </div>
        </div>

        <div  class="card" style="width: 18rem; margin:0px auto;">
            <img class="card-img-top" src="https://c8.alamy.com/compes/g1hd32/los-musculos-deltoides-anterior-anatomia-musculos-aislados-en-blanco-ilustracion-3d-g1hd32.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Deltoides frontal</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary espacio">Ejercicios Deltoides frontal</a>
              <a href="#" class="btn btn-secondary">Ejercicios para Hombro</a>
            </div>
        </div>
    </div>

    <h1>Pecho</h1>
    <div class="grupo">
        <div  class="card" style="width: 18rem; margin:0px auto;">
            <img class="card-img-top" src="https://c8.alamy.com/compes/g1hd32/los-musculos-deltoides-anterior-anatomia-musculos-aislados-en-blanco-ilustracion-3d-g1hd32.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Deltoides frontal</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary espacio">Ejercicios Deltoides frontal</a>
              <a href="#" class="btn btn-secondary">Ejercicios para Hombro</a>
            </div>
        </div>

        <div  class="card" style="width: 18rem; margin:0px auto;">
            <img class="card-img-top" src="https://c8.alamy.com/compes/g1hd32/los-musculos-deltoides-anterior-anatomia-musculos-aislados-en-blanco-ilustracion-3d-g1hd32.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Deltoides frontal</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary espacio">Ejercicios Deltoides frontal</a>
              <a href="#" class="btn btn-secondary">Ejercicios para Hombro</a>
            </div>
        </div>

        <div  class="card" style="width: 18rem; margin:0px auto;">
            <img class="card-img-top" src="https://c8.alamy.com/compes/g1hd32/los-musculos-deltoides-anterior-anatomia-musculos-aislados-en-blanco-ilustracion-3d-g1hd32.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Deltoides frontal</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary espacio">Ejercicios Deltoides frontal</a>
              <a href="#" class="btn btn-secondary">Ejercicios para Hombro</a>
            </div>
        </div>

        <div  class="card" style="width: 18rem; margin:0px auto;">
            <img class="card-img-top" src="https://c8.alamy.com/compes/g1hd32/los-musculos-deltoides-anterior-anatomia-musculos-aislados-en-blanco-ilustracion-3d-g1hd32.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Deltoides frontal</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary espacio">Ejercicios Deltoides frontal</a>
              <a href="#" class="btn btn-secondary">Ejercicios para Hombro</a>
            </div>
        </div>
    </div>

    <h1>Antebrazo</h1>
    <div class="grupo">
        <div  class="card" style="width: 18rem; margin:0px auto;">
            <img class="card-img-top" src="https://c8.alamy.com/compes/g1hd32/los-musculos-deltoides-anterior-anatomia-musculos-aislados-en-blanco-ilustracion-3d-g1hd32.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Deltoides frontal</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary espacio">Ejercicios Deltoides frontal</a>
              <a href="#" class="btn btn-secondary">Ejercicios para Hombro</a>
            </div>
        </div>

        <div  class="card" style="width: 18rem; margin:0px auto;">
          <img class="card-img-top" src="https://c8.alamy.com/compes/g1hd32/los-musculos-deltoides-anterior-anatomia-musculos-aislados-en-blanco-ilustracion-3d-g1hd32.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Deltoides frontal</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary espacio">Ejercicios Deltoides frontal</a>
            <a href="#" class="btn btn-secondary">Ejercicios para Hombro</a>
          </div>
      </div>
    </div>


    </div>
@endsection
    </body>
    </html>