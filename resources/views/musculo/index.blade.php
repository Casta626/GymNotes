<!DOCTYPE html>
<html>

<head>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{ asset('css/musculo.css') }}" rel="stylesheet" type="text/css">

    {{-- <script type="text/javascript" src="{{ asset('js/script.js')  }}"></script> --}}

</head>

<body class="body">

    @extends('layouts.app-master')

    @section('content')
    {{-- ! EN EL RESPONSIVE PONER QUE CADA CARTA/MUSCLO SE PASE DESLIZANDOSE A UN LADO --}}

    {{-- TODO EN EL RESPONSIVE PONER QUE CADA CARTA/MUSCLO SE PASE DESLIZANDOSE A UN LADO --}}

    {{-- Todo Poner una tabla --}}

    {{-- ! En el navbar.blade.php/@guest es donde puedo pillar la forma de hacer el get para el RM --}}

    {{ setlocale(LC_ALL, 'es_ES') }}

    <div id="pecho" class="titulo">
        <h1><a class="reset-color-enlace" href="/ejercicios#pecho">Pecho</a></h1>
        <div class="grupo">
            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/e7tcne/pecho-pectoral-mayor-pectoralis-menor-anatomia-musculos-e7tcne.jpg"
                    alt="Card image cap">
                <div class="card-body" style="pa">
                    <h5 class="card-title">Pectoral Menor</h5>
                    <p class="card-text">El pectoral mayor trabaja directamente en el hombro, específicamente realizando
                        rotación interna y aducción, es decir dirige el brazo hacia la parte medial del cuerpo.</p>
                    <a href="https://www.fisioterapia-online.com/glosario/musculos-pectoral-mayor-y-menor">info:</a>
                </div>
            </div>


            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/2ab596k/3d-prestados-ilustracion-del-musculo-pectoral-menor-2ab596k.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Pectoral Menor</h5>
                    <p class="card-text">Este musculo actúa en diversos movimientos realizados por el hombro, la
                        escapula, interviniendo incluso durante la respiración. Teniendo como principal función: la de
                        tirar del hombro hacia abajo
                        y hacia adelante, rotarla escapula y elevar el borde medial de la misma alejándola de las
                        costillas.
                        También actúa simultáneamente en: La respiración profunda, depresión del hombro, rotación hacia
                        abajo con el romboide y como elevador de la escápula.</p>
                    <a href="https://www.cuidate-murcia.com/el-pectoral-menor-anatomia-funcion-y-sus-patologias/#:~:text=El%20pectoral%20menor%20es%20un,como%20el%20de%20hombros%20adelantados">info:</a>
                </div>
            </div>
            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/2bca7x6/musculo-serrato-anterior-ilustracion-2bca7x6.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Pectoral Menor</h5>
                    <p class="card-text">Este musculo actúa en diversos movimientos realizados por el hombro, la
                        escapula, interviniendo incluso durante la respiración. Teniendo como principal función: la de
                        tirar del hombro hacia abajo
                        y hacia adelante, rotarla escapula y elevar el borde medial de la misma alejándola de las
                        costillas.
                        También actúa simultáneamente en: La respiración profunda, depresión del hombro, rotación hacia
                        abajo con el romboide y como elevador de la escápula.</p>
                    <a href="https://www.cuidate-murcia.com/el-pectoral-menor-anatomia-funcion-y-sus-patologias/#:~:text=El%20pectoral%20menor%20es%20un,como%20el%20de%20hombros%20adelantados">info:</a>
                </div>
            </div>
        </div>
    </div>

    <div id="espalda" class="titulo">
        <h1><a class="reset-color-enlace" href="/ejercicios#espalda">Espalda</a></h1>
        <div class="grupo">
            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/e7tcne/pecho-pectoral-mayor-pectoralis-menor-anatomia-musculos-e7tcne.jpg"
                    alt="Card image cap">
                <div class="card-body" style="pa">
                    <h5 class="card-title">MUSCULO</h5>
                    <p class="card-text">TEXTO</p>
                    <a href="https://www.fisioterapia-online.com/glosario/musculos-pectoral-mayor-y-menor">info:</a>
                </div>
            </div>


            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/2ab596k/3d-prestados-ilustracion-del-musculo-pectoral-menor-2ab596k.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">MUSCULO</h5>
                    <p class="card-text">TEXTO</p>
                    <a href="https://www.cuidate-murcia.com/el-pectoral-menor-anatomia-funcion-y-sus-patologias/#:~:text=El%20pectoral%20menor%20es%20un,como%20el%20de%20hombros%20adelantados">info:</a>
                </div>
            </div>
            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/2bca7x6/musculo-serrato-anterior-ilustracion-2bca7x6.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">MUSCULO</h5>
                    <p class="card-text">TEXTO</p>
                    <a href="https://www.cuidate-murcia.com/el-pectoral-menor-anatomia-funcion-y-sus-patologias/#:~:text=El%20pectoral%20menor%20es%20un,como%20el%20de%20hombros%20adelantados">info:</a>
                </div>
            </div>

            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/2bca7x6/musculo-serrato-anterior-ilustracion-2bca7x6.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">MUSCULO</h5>
                    <p class="card-text">TEXTO</p>
                    <a href="https://www.cuidate-murcia.com/el-pectoral-menor-anatomia-funcion-y-sus-patologias/#:~:text=El%20pectoral%20menor%20es%20un,como%20el%20de%20hombros%20adelantados">info:</a>
                </div>
            </div>
        </div>
    </div>

    <div id="hombro" class="titulo">
        <h1><a class="reset-color-enlace" href="/ejercicios#hombro">Hombro</a></h1>
        <div class="grupo">
            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/e7tcne/pecho-pectoral-mayor-pectoralis-menor-anatomia-musculos-e7tcne.jpg"
                    alt="Card image cap">
                <div class="card-body" style="pa">
                    <h5 class="card-title">MUSCULO</h5>
                    <p class="card-text">TEXTO</p>
                    <a href="https://www.fisioterapia-online.com/glosario/musculos-pectoral-mayor-y-menor">info:</a>
                </div>
            </div>

            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/2ab596k/3d-prestados-ilustracion-del-musculo-pectoral-menor-2ab596k.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">MUSCULO</h5>
                    <p class="card-text">TEXTO</p>
                    <a href="https://www.cuidate-murcia.com/el-pectoral-menor-anatomia-funcion-y-sus-patologias/#:~:text=El%20pectoral%20menor%20es%20un,como%20el%20de%20hombros%20adelantados">info:</a>
                </div>
            </div>
            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/2bca7x6/musculo-serrato-anterior-ilustracion-2bca7x6.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">MUSCULO</h5>
                    <p class="card-text">TEXTO</p>
                    <a href="https://www.cuidate-murcia.com/el-pectoral-menor-anatomia-funcion-y-sus-patologias/#:~:text=El%20pectoral%20menor%20es%20un,como%20el%20de%20hombros%20adelantados">info:</a>
                </div>
            </div>

            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/2bca7x6/musculo-serrato-anterior-ilustracion-2bca7x6.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">MUSCULO</h5>
                    <p class="card-text">TEXTO</p>
                    <a href="https://www.cuidate-murcia.com/el-pectoral-menor-anatomia-funcion-y-sus-patologias/#:~:text=El%20pectoral%20menor%20es%20un,como%20el%20de%20hombros%20adelantados">info:</a>
                </div>
            </div>
        </div>
    </div>

    <div id="abdomen" class="titulo">
        <h1><a class="reset-color-enlace" href="/ejercicios#abdomen">Abdomen</a></h1>
        <div class="grupo">
            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/e7tcne/pecho-pectoral-mayor-pectoralis-menor-anatomia-musculos-e7tcne.jpg"
                    alt="Card image cap">
                <div class="card-body" style="pa">
                    <h5 class="card-title">MUSCULO</h5>
                    <p class="card-text">TEXTO</p>
                    <a href="https://www.fisioterapia-online.com/glosario/musculos-pectoral-mayor-y-menor">info:</a>
                </div>
            </div>


            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/2ab596k/3d-prestados-ilustracion-del-musculo-pectoral-menor-2ab596k.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">MUSCULO</h5>
                    <p class="card-text">TEXTO</p>
                    <a href="https://www.cuidate-murcia.com/el-pectoral-menor-anatomia-funcion-y-sus-patologias/#:~:text=El%20pectoral%20menor%20es%20un,como%20el%20de%20hombros%20adelantados">info:</a>
                </div>
            </div>
            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/2bca7x6/musculo-serrato-anterior-ilustracion-2bca7x6.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">MUSCULO</h5>
                    <p class="card-text">TEXTO</p>
                    <a href="https://www.cuidate-murcia.com/el-pectoral-menor-anatomia-funcion-y-sus-patologias/#:~:text=El%20pectoral%20menor%20es%20un,como%20el%20de%20hombros%20adelantados">info:</a>
                </div>
            </div>

            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/2bca7x6/musculo-serrato-anterior-ilustracion-2bca7x6.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">MUSCULO</h5>
                    <p class="card-text">TEXTO</p>
                    <a href="https://www.cuidate-murcia.com/el-pectoral-menor-anatomia-funcion-y-sus-patologias/#:~:text=El%20pectoral%20menor%20es%20un,como%20el%20de%20hombros%20adelantados">info:</a>
                </div>
            </div>
        </div>
    </div>

    <div id="piernas" class="titulo">
        <h1><a class="reset-color-enlace" href="/ejercicios#piernas">Piernas</a></h1>
        <div class="grupo">
            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/e7tcne/pecho-pectoral-mayor-pectoralis-menor-anatomia-musculos-e7tcne.jpg"
                    alt="Card image cap">
                <div class="card-body" style="pa">
                    <h5 class="card-title">MUSCULO</h5>
                    <p class="card-text">TEXTO</p>
                    <a href="https://www.fisioterapia-online.com/glosario/musculos-pectoral-mayor-y-menor">info:</a>
                </div>
            </div>


            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/2ab596k/3d-prestados-ilustracion-del-musculo-pectoral-menor-2ab596k.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">MUSCULO</h5>
                    <p class="card-text">TEXTO</p>
                    <a href="https://www.cuidate-murcia.com/el-pectoral-menor-anatomia-funcion-y-sus-patologias/#:~:text=El%20pectoral%20menor%20es%20un,como%20el%20de%20hombros%20adelantados">info:</a>
                </div>
            </div>
            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/2bca7x6/musculo-serrato-anterior-ilustracion-2bca7x6.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">MUSCULO</h5>
                    <p class="card-text">TEXTO</p>
                    <a href="https://www.cuidate-murcia.com/el-pectoral-menor-anatomia-funcion-y-sus-patologias/#:~:text=El%20pectoral%20menor%20es%20un,como%20el%20de%20hombros%20adelantados">info:</a>
                </div>
            </div>

            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/2bca7x6/musculo-serrato-anterior-ilustracion-2bca7x6.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">MUSCULO</h5>
                    <p class="card-text">TEXTO</p>
                    <a href="https://www.cuidate-murcia.com/el-pectoral-menor-anatomia-funcion-y-sus-patologias/#:~:text=El%20pectoral%20menor%20es%20un,como%20el%20de%20hombros%20adelantados">info:</a>
                </div>
            </div>
        </div>
    </div>

    <div id="biceps" class="titulo">
        <h1><a class="reset-color-enlace" href="/ejercicios#biceps">Biceps</a></h1>
        <div class="grupo">
            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/e7tcne/pecho-pectoral-mayor-pectoralis-menor-anatomia-musculos-e7tcne.jpg"
                    alt="Card image cap">
                <div class="card-body" style="pa">
                    <h5 class="card-title">MUSCULO</h5>
                    <p class="card-text">TEXTO</p>
                    <a href="https://www.fisioterapia-online.com/glosario/musculos-pectoral-mayor-y-menor">info:</a>
                </div>
            </div>


            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/2ab596k/3d-prestados-ilustracion-del-musculo-pectoral-menor-2ab596k.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">MUSCULO</h5>
                    <p class="card-text">TEXTO</p>
                    <a href="https://www.cuidate-murcia.com/el-pectoral-menor-anatomia-funcion-y-sus-patologias/#:~:text=El%20pectoral%20menor%20es%20un,como%20el%20de%20hombros%20adelantados">info:</a>
                </div>
            </div>
            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/2bca7x6/musculo-serrato-anterior-ilustracion-2bca7x6.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">MUSCULO</h5>
                    <p class="card-text">TEXTO</p>
                    <a href="https://www.cuidate-murcia.com/el-pectoral-menor-anatomia-funcion-y-sus-patologias/#:~:text=El%20pectoral%20menor%20es%20un,como%20el%20de%20hombros%20adelantados">info:</a>
                </div>
            </div>

            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/2bca7x6/musculo-serrato-anterior-ilustracion-2bca7x6.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">MUSCULO</h5>
                    <p class="card-text">TEXTO</p>
                    <a href="https://www.cuidate-murcia.com/el-pectoral-menor-anatomia-funcion-y-sus-patologias/#:~:text=El%20pectoral%20menor%20es%20un,como%20el%20de%20hombros%20adelantados">info:</a>
                </div>
            </div>
        </div>
    </div>

    <div id="triceps" class="titulo">
        <h1><a class="reset-color-enlace" href="/ejercicios#triceps">Triceps</a></h1>
        <div class="grupo">
            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/e7tcne/pecho-pectoral-mayor-pectoralis-menor-anatomia-musculos-e7tcne.jpg"
                    alt="Card image cap">
                <div class="card-body" style="pa">
                    <h5 class="card-title">MUSCULO</h5>
                    <p class="card-text">TEXTO</p>
                    <a href="https://www.fisioterapia-online.com/glosario/musculos-pectoral-mayor-y-menor">info:</a>
                </div>
            </div>


            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/2ab596k/3d-prestados-ilustracion-del-musculo-pectoral-menor-2ab596k.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">MUSCULO</h5>
                    <p class="card-text">TEXTO</p>
                    <a href="https://www.cuidate-murcia.com/el-pectoral-menor-anatomia-funcion-y-sus-patologias/#:~:text=El%20pectoral%20menor%20es%20un,como%20el%20de%20hombros%20adelantados">info:</a>
                </div>
            </div>
            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/2bca7x6/musculo-serrato-anterior-ilustracion-2bca7x6.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">MUSCULO</h5>
                    <p class="card-text">TEXTO</p>
                    <a href="https://www.cuidate-murcia.com/el-pectoral-menor-anatomia-funcion-y-sus-patologias/#:~:text=El%20pectoral%20menor%20es%20un,como%20el%20de%20hombros%20adelantados">info:</a>
                </div>
            </div>

            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/2bca7x6/musculo-serrato-anterior-ilustracion-2bca7x6.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">MUSCULO</h5>
                    <p class="card-text">TEXTO</p>
                    <a href="https://www.cuidate-murcia.com/el-pectoral-menor-anatomia-funcion-y-sus-patologias/#:~:text=El%20pectoral%20menor%20es%20un,como%20el%20de%20hombros%20adelantados">info:</a>
                </div>
            </div>
        </div>
    </div>

    <div id="antebrazos" class="titulo">
        <h1><a class="reset-color-enlace" href="/ejercicios#antebrazos">Antebrazo</a></h1>
        <div class="grupo">
            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/e7tcne/pecho-pectoral-mayor-pectoralis-menor-anatomia-musculos-e7tcne.jpg"
                    alt="Card image cap">
                <div class="card-body" style="pa">
                    <h5 class="card-title">MUSCULO</h5>
                    <p class="card-text">TEXTO</p>
                    <a href="https://www.fisioterapia-online.com/glosario/musculos-pectoral-mayor-y-menor">info:</a>
                </div>
            </div>


            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/2ab596k/3d-prestados-ilustracion-del-musculo-pectoral-menor-2ab596k.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">MUSCULO</h5>
                    <p class="card-text">TEXTO</p>
                    <a href="https://www.cuidate-murcia.com/el-pectoral-menor-anatomia-funcion-y-sus-patologias/#:~:text=El%20pectoral%20menor%20es%20un,como%20el%20de%20hombros%20adelantados">info:</a>
                </div>
            </div>
            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/2bca7x6/musculo-serrato-anterior-ilustracion-2bca7x6.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">MUSCULO</h5>
                    <p class="card-text">TEXTO</p>
                    <a href="https://www.cuidate-murcia.com/el-pectoral-menor-anatomia-funcion-y-sus-patologias/#:~:text=El%20pectoral%20menor%20es%20un,como%20el%20de%20hombros%20adelantados">info:</a>
                </div>
            </div>

            <div class="card carta">
                <img class="card-img-top carta"
                    src="https://c8.alamy.com/compes/2bca7x6/musculo-serrato-anterior-ilustracion-2bca7x6.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">MUSCULO</h5>
                    <p class="card-text">TEXTO</p>
                    <a href="https://www.cuidate-murcia.com/el-pectoral-menor-anatomia-funcion-y-sus-patologias/#:~:text=El%20pectoral%20menor%20es%20un,como%20el%20de%20hombros%20adelantados">info:</a>
                </div>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>