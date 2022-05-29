<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/product.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <ul class="navigation">
              <li class="nav-item">
                <a class="nav-link" href="index">BACK</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="latest">Latest</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="movierank">Movie Ranking</a>
              </li>
        </ul>
        <form action="" method="GET">
          {{csrf_field()}}
          <div class="search">
            <input type="text"  name="cari" id="cari"  placeholder="Search">
            <i class="fa-solid fa-magnifying-glass"></i>
          </div>
        </form>
    </header>
    <section id="product1" class="section-p1">
        <h2>Movie Lists</h2>
         <div class="pro-container">
            @forEach($addmovie as $movie)
             <div class="pro">
                 <h5 class="no-highlight">{{$movie->name}}</h5>
                <a href="{{$movie->page}}"><img src="{{ asset('images/' . $movie->image)}}" alt="" class="thumbnail"></a>
                <div class="des">
                    <span>{{$movie->desc}}</span>
                    <div class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
                <form action="#" method="POST">
                  <a href="{{$movie->page}}"><i class="fa fa-plus circle" aria-hidden="true" id="list" name="list"></i></a>
                </form>
             </div>
            @endforeach
         </div>
    </section>
</body>
</html>