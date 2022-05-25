<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/clock.css')}}">
</head>
<body>
    <header>
        <ul class="navigation">
              <li class="nav-item">
                <a class="nav-link" href="index">BACK</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="clock">CLOCK</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="fightingpage">FIGHTING GAMES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route ('addlatest.create')}}">Latestttt</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route ('addrank.create')}}">rankkkkkkkk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route ('addmovie.create')}}">ADD MOVIE</a>
              </li>
        </ul>
    </header>
</body>
</html>