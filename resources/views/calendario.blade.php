<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1,width=device-width">
    <meta name="format-detection" content="telephone=no">
    <title>Calendario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lato-font/3.0.0/css/lato-font.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script defer src="js/calendario.js"></script>
    <link href="css/calendario.css" rel="stylesheet">


</head>

<body>


    @extends('layouts.app-master')

    @section('content')

    @guest
    <h1>Para acceder a esta sección debes de iniciar sesión.</h1>
    @endguest

    @auth

    <form action="/calendario" method="post">
        @csrf
        <h1 class="inicio">Entrenamiento</h1>
        <p>Selecciona fecha y hora para continuar</p>
        <div class="vanilla-calendar" data-provide="datepicker" name="data"></div>
        <div class="vanilla-calendar-info">
            <span id="vanilla-calendar-info-date" data-provide="datepicker" name="date"> </span>
            <span id="vanilla-calendar-info-time" data-provide="datepicker" name="time"></span>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const generateDate = (date) => {
                    const year = date.getUTCFullYear();
                    let month = date.getUTCMonth() + 1;
                    let day = date.getUTCDate();

                    month = month < 10 ? `0${month}` : month;
                    day = day < 10 ? `0${day}` : day;

                    return `${year}-${month}-${day}`;
                    
                };

                const calendarInfoDate = document.querySelector('#vanilla-calendar-info-date');
                const calendarInfoTime = document.querySelector('#vanilla-calendar-info-time');
                const calendar = new VanillaCalendar('.vanilla-calendar', {
                    settings: {
                        lang: 'es',
                        selection: {
                            time: 12,
                        },
                        selected: {
                            dates: [generateDate(new Date())],
                        },
                    },
                    actions: {
                        clickDay(e, dates) {
                            calendarInfoDate.innerText = dates;
                        },
                        changeTime(e, time) {
                            calendarInfoTime.innerText = time;
                        },
                    },
                });
                calendar.init();
                calendarInfoDate.innerText = generateDate(new Date());
                calendarInfoTime.innerText = calendar.selectedTime;
                // $.post('users',calendar.selectedTime, function(){
                //     return calendar.selectedTime.json()
                // })
            });
        </script>

        <div class="list-choice">
            <div class="list-choice-title">¿Qué desea hacer?</div>
            <div class="list-choice-objects">
                <label>
                    <input type="radio" name="crud" value="new" /> <span class="dd">Crear</span>
                </label>
                <label>
                    <input type="radio" name="crud" value="delete" /> <span class="dd">Borrar</span>
                </label>
            </div>
        </div>
        <input type="date" name="fecha">
        <br>
        <input type="submit" style="margin-top: 20px">
    </form>
    @endauth
    @endsection

</body>

</html>