<!DOCTYPE html>
<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    h1{
        font-size-adjust: initial;
        text-align: center;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        
    }
    table.ejercicio{
        text-align: center;
        width: 100%;
        font-family: 'Roboto', sans-serif;
        color: white;
        padding:  2%;
    }
    tr,td,th{
        padding: 1.5%;
    }

    div.noticia {
    width: 100%;
    margin: 20px auto;
    background-color:#ffc107;
    color: #fff;
    padding: 15px;
    }

    div.noticia img.izquierda {
    float: left;
    margin-right: 15px;
    }

    div.noticia img.derecha {
    float: right;
    margin-left: 15px;
    }

    div.reset {
    clear: both;
    }
</style>
</head>
<body>
    
@extends('layouts.app-master')

@section('content')

    {{-- ! EN EL RESPONSIVE PONER QUE CADA CARTA/MUSCLO SE PASE DESLIZANDOSE A UN LADO --}}

    {{-- TODO EN EL RESPONSIVE PONER QUE CADA CARTA/MUSCLO SE PASE DESLIZANDOSE A UN LADO --}}

{{ setlocale(LC_ALL,"es_ES")  }}
<div class="bg-light p-5 rounded">

    <h1 style="margin: 5%">Hombro</h1>
    <div style="display: flex; text-align: center;">
        <div  class="card" style="width: 18rem; margin:0px auto;">
            <img class="card-img-top" src="https://c8.alamy.com/compes/g1hd32/los-musculos-deltoides-anterior-anatomia-musculos-aislados-en-blanco-ilustracion-3d-g1hd32.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Deltoides frontal</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a style="margin: 1%" href="#" class="btn btn-primary">Ejercicios Deltoides frontal</a>
              <a style="margin: 1%" href="#" class="btn btn-secondary">Ejercicios para Hombro</a>
            </div>
        </div>

        <div  class="card" style="width: 18rem; margin:0px auto;">
            <img class="card-img-top" src="https://c8.alamy.com/compes/g1hd32/los-musculos-deltoides-anterior-anatomia-musculos-aislados-en-blanco-ilustracion-3d-g1hd32.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Deltoides frontal</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a style="margin: 1%" href="#" class="btn btn-primary">Ejercicios Deltoides frontal</a>
              <a style="margin: 1%" href="#" class="btn btn-secondary">Ejercicios para Hombro</a>
            </div>
        </div>

        <div  class="card" style="width: 18rem; margin:0px auto;">
            <img class="card-img-top" src="https://c8.alamy.com/compes/g1hd32/los-musculos-deltoides-anterior-anatomia-musculos-aislados-en-blanco-ilustracion-3d-g1hd32.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Deltoides frontal</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a style="margin: 1%" href="#" class="btn btn-primary">Ejercicios Deltoides frontal</a>
              <a style="margin: 1%" href="#" class="btn btn-secondary">Ejercicios para Hombro</a>
            </div>
        </div>
    </div>

    <h1 style="margin: 5%">Pecho</h1>
    <div style="display: flex; text-align: center;">
        <div  class="card" style="width: 18rem; margin:0px auto;">
            <img class="card-img-top" src="https://c8.alamy.com/compes/g1hd32/los-musculos-deltoides-anterior-anatomia-musculos-aislados-en-blanco-ilustracion-3d-g1hd32.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Deltoides frontal</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a style="margin: 1%" href="#" class="btn btn-primary">Ejercicios Deltoides frontal</a>
              <a style="margin: 1%" href="#" class="btn btn-secondary">Ejercicios para Hombro</a>
            </div>
        </div>

        <div  class="card" style="width: 18rem; margin:0px auto;">
            <img class="card-img-top" src="https://c8.alamy.com/compes/g1hd32/los-musculos-deltoides-anterior-anatomia-musculos-aislados-en-blanco-ilustracion-3d-g1hd32.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Deltoides frontal</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a style="margin: 1%" href="#" class="btn btn-primary">Ejercicios Deltoides frontal</a>
              <a style="margin: 1%" href="#" class="btn btn-secondary">Ejercicios para Hombro</a>
            </div>
        </div>

        <div  class="card" style="width: 18rem; margin:0px auto;">
            <img class="card-img-top" src="https://c8.alamy.com/compes/g1hd32/los-musculos-deltoides-anterior-anatomia-musculos-aislados-en-blanco-ilustracion-3d-g1hd32.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Deltoides frontal</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a style="margin: 1%" href="#" class="btn btn-primary">Ejercicios Deltoides frontal</a>
              <a style="margin: 1%" href="#" class="btn btn-secondary">Ejercicios para Hombro</a>
            </div>
        </div>

        <div  class="card" style="width: 18rem; margin:0px auto;">
            <img class="card-img-top" src="https://c8.alamy.com/compes/g1hd32/los-musculos-deltoides-anterior-anatomia-musculos-aislados-en-blanco-ilustracion-3d-g1hd32.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Deltoides frontal</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a style="margin: 1%" href="#" class="btn btn-primary">Ejercicios Deltoides frontal</a>
              <a style="margin: 1%" href="#" class="btn btn-secondary">Ejercicios para Hombro</a>
            </div>
        </div>
    </div>

    <h1 style="margin: 5%">Antebrazo</h1>
    <div style="display: flex; text-align: center;">
        <div  class="card" style="width: 18rem; margin:0px auto;">
            <img class="card-img-top" src="https://c8.alamy.com/compes/g1hd32/los-musculos-deltoides-anterior-anatomia-musculos-aislados-en-blanco-ilustracion-3d-g1hd32.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Deltoides frontal</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a style="margin: 1%" href="#" class="btn btn-primary">Ejercicios Deltoides frontal</a>
              <a style="margin: 1%" href="#" class="btn btn-secondary">Ejercicios para Hombro</a>
            </div>
        </div>
    </div>


    </div>
@endsection
    </body>
    </html>