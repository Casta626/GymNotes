<!DOCTYPE html>
<html>

<head>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ asset('css/rmmax.css') }}" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">




    {{-- <script type="text/javascript" src="{{ asset('js/rmmax.js')  }}"></script> --}}
    <title>Calculadora-RM</title>
</head>

<body>
    @extends('layouts.app-master')

    @section('content')

    @if($posts != null)
    @foreach ($posts as $post)
    <div class="post-list">
        <p>{{ $post->title }}</p>
        <img src="{{ $post->image }}">
    </div>
    @endforeach
    @else
    <div>
        <h2>No posts found</h2>
    </div>
    @endif

    </div>
    @endsection
</body>

</html>