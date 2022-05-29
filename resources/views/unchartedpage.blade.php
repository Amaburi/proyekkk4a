<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://kit.fontawesome.com/e103d6b7c3.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <a href="product" class="logo"><img src="{{asset('images/Logo.png')}}"></a>
    <ul class="navigation">
        <li class="nav-item">
            
          </li>
    </ul>
    </form>
    </header>
    <div class="banner">
        <img src="{{asset('images/unncharted.jpg')}}">
        <div class="content">
            
            <h4>
                <span>2021</span>
                <span><i>15+</i></span>
                <span>1h 56min</span>
                <span>Action Adventure</span>
            </h4>
            <p class="no-highlight">In the summer of 1992, Hugh and Olivia Crain and their five children—Steven, Shirley, Theodora (Theo), Luke, and Eleanor (Nell)—move into Hill House to renovate the mansion in order to sell it and build their own house, designed by Olivia. However, due to unexpected repairs, they have to stay longer, and they begin to experience increasing paranormal phenomena, resulting in a tragic loss and the family fleeing from the house. Twenty-six years later, the Crain siblings and their estranged father reunite after another tragedy strikes them, and they are forced to confront how their time in Hill House has affected each of them.</p>
            <div class="button">
                <a href="#"><i class="fa-solid fa-play"></i>Play</a>
                <a href="#"><i class="fa-solid fa-plus"></i>My list</a>
            </div>
        </div>
        <a class="play" onclick="toggleVideo();"><img src="{{asset('images/play.png')}}">Watch Trailer</a>
    </div>
    <div class="trailer">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/eHp3MbsCbMg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <img src="{{asset('images/close.png')}}" class="close" onclick="toggleVideo();">
    </div>

    <script>
        function toggleVideo(){
            const video = document.querySelector('iframe');
            const trailer = document.querySelector('.trailer');
            trailer.classList.toggle('active')
            video.currentTime = 0;
            video.pause();
        }
    </script>
</body>
</html>