<!DOCTYPE html>
<html>

<head>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ asset('css/rmmax.css') }}" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>

    <script>
        const enviarRM =  (e)=> {

                e.prevent.default();
                let peso = document.querySelector("#peso").value
                let rep = document.querySelector("#rep").value

                ajax({
                        type: 'POST',
                        url: 'rm-max2?peso='+ peso +'&rep='+ rep, //se envia y recibe de la funcion php "equation"
                        success: function(response) {
                            $('#resultadoEcuacion').text(response); //setea el resutado de la ecuacion en el blade
                        },
                        error: function(err) {
                            console.log(err);
                        }
                    }

                }
            
    </script>

    {{-- <script type="text/javascript" src="{{ asset('js/rmmax.js')  }}"></script> --}}
    <title>Calculadora-RM</title>
</head>

<body>
    @extends('layouts.app-master')

    @section('content')

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
                        <h5 class="card-title">Pectoral Menor</h5>
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
                        src="https://media.istockphoto.com/photos/chest-pectoralis-major-minor-anatomy-muscles-picture-id179538762?k=20&m=179538762&s=612x612&w=0&h=mg49byyQ8tmU2Afiz_g_00cgrdOJpS4X6Heu595AwDQ="
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Pectoral Menor</h5>
                        <p class="card-text">El pectoral mayor trabaja directamente en el hombro, específicamente
                            realizando
                            rotación interna y aducción, es decir dirige el brazo hacia la parte medial del cuerpo.</p>
                        <a href="https://www.fisioterapia-online.com/glosario/musculos-pectoral-mayor-y-menor">info:</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="image2">
                <div class="card carta">
                    <img class="card-img-top carta"
                        src="https://media.istockphoto.com/photos/chest-pectoralis-major-minor-anatomy-muscles-picture-id179538762?k=20&m=179538762&s=612x612&w=0&h=mg49byyQ8tmU2Afiz_g_00cgrdOJpS4X6Heu595AwDQ="
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Pectoral Menor</h5>
                        <p class="card-text">El pectoral mayor trabaja directamente en el hombro, específicamente
                            realizando
                            rotación interna y aducción, es decir dirige el brazo hacia la parte medial del cuerpo.</p>
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
    @endsection
</body>

</html>