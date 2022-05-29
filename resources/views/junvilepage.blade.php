<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/templatemovie2.css')}}">
    <script src="https://kit.fontawesome.com/e103d6b7c3.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <a href="latest" class="logo"><img src="{{asset('images/strangelogo.png')}}"></a>
    <ul class="navigation">
        <li class="nav-item">
            
          </li>
    </ul>
    </form>
    </header>
    <div class="banner">
        <img src="{{asset('images/juvenile.jpg')}}">
        <div class="content">
            
            <h4>
                <span>2022</span>
                <span><i>13+</i></span>
                <span>2h 6min</span>
                <span>Action Adventure</span>
            </h4>
            <p>Juvenile Justice follows the story of Shim Eun-seok, an elite judge with a cold and distant personality, who is known for her dislike of juveniles, as she becomes a newly appointed judge of a juvenile court in the Yeonhwa District. There, she breaks customs and administers her own ways of punishing the offenders. She has to deal with and balance her aversion to minor offenders with firm beliefs on justice and punishment as she tackles complex cases while discovering what being an adult truly means.</p>
            <div class="button">
                <a href="#"><i class="fa-solid fa-play"></i>Play</a>
                <a href="#"><i class="fa-solid fa-plus"></i>My list</a>
            </div>
        </div>
        <a class="play" onclick="toggleVideo();"><img src="{{asset('images/play.png')}}">Watch Trailer</a>
    </div>
    <div class="trailer">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/O1r5XXJOYNA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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