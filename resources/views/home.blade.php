<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="#" class="logo"><img src="{{asset('images/logo.png')}}"></a>
    <ul class="navigation">
        <li class="nav-item">
            <a class="nav-link" href="home">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="product">SHOWS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="latest">LATEST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="addmovie">ADD MOVIE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="recsection">Comment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="clock">For Fun</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route ('register')}}">LOG-OUT</a>
          </li>
    </ul>
    <div class="search">
        <input type="text" placeholder="Search">
        <i class="fa-solid fa-magnifying-glass"></i>
    </div>
    </header>
</body>
</html>