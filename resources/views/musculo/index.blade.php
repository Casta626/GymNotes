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
{{ setlocale(LC_ALL,"es_ES")  }}
    <div class="bg-light p-5 rounded">

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

        </div>
@endsection
    </body>
    </html>