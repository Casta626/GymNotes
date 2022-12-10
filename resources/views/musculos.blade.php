<!DOCTYPE html>
<html>

<head>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    {{--
    <link href="{{ asset('css/rmmax.css') }}" rel="stylesheet" type="text/css"> --}}

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
    <title>Músculos</title>


    <style>
        .card-img-top {
            width: 700px !important;
            height: 650px !important;
            align-self: center !important;
        }

        @media (max-width: 800px) {
            .card-img-top {
                width: 100% !important;
                height: 100% !important;
            }
        }

        a.reset-color-enlace {
            color: white;
            text-decoration: none;
        }

        a.reset-color-enlace:hover {
            color: white;
        }

        h1 {
            /* font-size-adjust: initial;
    text-align: center;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    padding-bottom: 5%;
    padding-top: 5%; */

            border: black solid 5px;
            border-radius: 22px;
            box-shadow: 6px 20px 10px black;
            background-color: #0b5ed7;
            color: white;
            text-align: center;
            margin-bottom: 25px !important;
            margin-top: 45px !important;

        }
    </style>
</head>

<body>
    @extends('layouts.app-master')

    @section('content')

    <h1><a class="reset-color-enlace" href="/ejercicios#pecho">Pecho</a></h1>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1">
            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2">
            </li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card carta">
                    <img class="card-img-top carta"
                        src="https://media.istockphoto.com/photos/chest-pectoralis-major-minor-anatomy-muscles-picture-id179538762?k=20&m=179538762&s=612x612&w=0&h=mg49byyQ8tmU2Afiz_g_00cgrdOJpS4X6Heu595AwDQ="
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Pectoral Mayor</h5>
                        <p class="card-text">El pectoral mayor trabaja directamente en el hombro, específicamente
                            realizando
                            rotación interna y aducción, es decir dirige el brazo hacia la parte medial del cuerpo.</p>
                        <a href="https://www.fisioterapia-online.com/glosario/musculos-pectoral-mayor-y-menor">info:</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card carta">
                    <img class="card-img-top carta"
                        src="https://www.shutterstock.com/image-illustration/3d-medical-illustration-explanation-smaller-260nw-1930719302.jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Pectoral Menor</h5>
                        <p class="card-text">Este musculo actúa en diversos movimientos realizados por el hombro, la
                            escapula, interviniendo incluso durante la respiración. Teniendo como principal función: la
                            de
                            tirar del hombro hacia abajo
                            y hacia adelante, rotarla escapula y elevar el borde medial de la misma alejándola de las
                            costillas.
                            También actúa simultáneamente en: La respiración profunda, depresión del hombro, rotación
                            hacia
                            abajo con el romboide y como elevador de la escápula.</p>
                        <a
                            href="https://www.cuidate-murcia.com/el-pectoral-menor-anatomia-funcion-y-sus-patologias/#:~:text=El%20pectoral%20menor%20es%20un,como%20el%20de%20hombros%20adelantados">info:</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="image2">
                <div class="card carta">
                    <img class="card-img-top carta" src="https://i.ytimg.com/vi/fUS7A0usLrA/maxresdefault.jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Serrato Anterior</h5>
                        <p class="card-text">Este musculo actúa en diversos movimientos realizados por el hombro, la
                            escapula, interviniendo incluso durante la respiración. Teniendo como principal función: la
                            de
                            tirar del hombro hacia abajo
                            y hacia adelante, rotarla escapula y elevar el borde medial de la misma alejándola de las
                            costillas.
                            También actúa simultáneamente en: La respiración profunda, depresión del hombro, rotación
                            hacia
                            abajo con el romboide y como elevador de la escápula.</p>
                        <a href="https://www.fisioterapia-online.com/glosario/musculos-pectoral-mayor-y-menor">info:</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true">
            </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <script>
        //handle Bootstrap carousel slide event
            $(".carousel").attr("data-interval", "15000");
    </script>


    <h1><a class="reset-color-enlace" href="/ejercicios#espalda">Espalda</a></h1>
    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active">
            </li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="1">
            </li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="2">
            </li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="3">
            </li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card carta">
                    <img class="card-img-top carta"
                        src="https://media.istockphoto.com/id/1313854778/de/foto/menschliches-muskelsystem-torso-muskeln-trapezius-muskel-anatomie.jpg?s=612x612&w=0&k=20&c=rd89GLIih4S0np4WPZxRz46xHgVhQ2rVppGHgNslLu8="
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Trapecios</h5>
                        <p class="card-text">El pectoral mayor trabaja directamente en el hombro, específicamente
                            realizando
                            rotación interna y aducción, es decir dirige el brazo hacia la parte medial del cuerpo.</p>
                        <a href="https://www.fisioterapia-online.com/glosario/musculos-pectoral-mayor-y-menor">info:</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card carta">
                    <img class="card-img-top carta"
                        src="https://c8.alamy.com/zoomses/9/ea225f8d69314184a1470a4d4593f6c1/e8cjbg.jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Dorsales</h5>
                        <p class="card-text">Este musculo actúa en diversos movimientos realizados por el hombro, la
                            escapula, interviniendo incluso durante la respiración. Teniendo como principal función: la
                            de
                            tirar del hombro hacia abajo
                            y hacia adelante, rotarla escapula y elevar el borde medial de la misma alejándola de las
                            costillas.
                            También actúa simultáneamente en: La respiración profunda, depresión del hombro, rotación
                            hacia
                            abajo con el romboide y como elevador de la escápula.</p>
                        <a
                            href="https://www.cuidate-murcia.com/el-pectoral-menor-anatomia-funcion-y-sus-patologias/#:~:text=El%20pectoral%20menor%20es%20un,como%20el%20de%20hombros%20adelantados">info:</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card carta">
                    <img class="card-img-top carta" src="https://image.shutterstock.com/image-illustration/this-3d-illustration-shows-view-260nw-1849652074.jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Romboide</h5>
                        <p class="card-text">Este musculo actúa en diversos movimientos realizados por el hombro, la
                            escapula, interviniendo incluso durante la respiración. Teniendo como principal función: la
                            de
                            tirar del hombro hacia abajo
                            y hacia adelante, rotarla escapula y elevar el borde medial de la misma alejándola de las
                            costillas.
                            También actúa simultáneamente en: La respiración profunda, depresión del hombro, rotación
                            hacia
                            abajo con el romboide y como elevador de la escápula.</p>
                        <a href="https://www.fisioterapia-online.com/glosario/musculos-pectoral-mayor-y-menor">info:</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card carta">
                    <img class="card-img-top carta" src="https://media.istockphoto.com/id/1289573584/es/foto/quadratus-lumborum-anatom%C3%ADa-muscular-para-concepto-m%C3%A9dico-ilustraci%C3%B3n-3d.jpg?s=612x612&w=0&k=20&c=lwNUyAqg23VLsx3mUiv4skXdjgHaMtwI7lG-LMXwbN0="
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Cuadrado Lumbar</h5>
                        <p class="card-text">Este musculo actúa en diversos movimientos realizados por el hombro, la
                            escapula, interviniendo incluso durante la respiración. Teniendo como principal función: la
                            de
                            tirar del hombro hacia abajo
                            y hacia adelante, rotarla escapula y elevar el borde medial de la misma alejándola de las
                            costillas.
                            También actúa simultáneamente en: La respiración profunda, depresión del hombro, rotación
                            hacia
                            abajo con el romboide y como elevador de la escápula.</p>
                        <a href="https://www.fisioterapia-online.com/glosario/musculos-pectoral-mayor-y-menor">info:</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true">
            </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    @endsection
</body>

</html>