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
        <img src="{{asset('images/obii.jpg')}}">
        <div class="content">
            
            <h4>
                <span>2022</span>
                <span><i>15+</i></span>
                <span>56min per Eps</span>
                <span>Action Adventure</span>
            </h4>
            <p class="no-highlight">Ten years after the events of Star Wars: Episode III – Revenge of the Sith (2005)—in which the Jedi were destroyed by Order 66 and his former apprentice Anakin Skywalker became the Sith Lord Darth Vader—Obi-Wan Kenobi is watching over Vader's son, Luke Skywalker, on Tatooine. Hiding on Tatooine, Kenobi lives a solitary life in exile. Darth Vader has set up the Sith Inquisitors program, a group of dark side Force users, to hunt down any Jedi who survived Order 66. Kenobi is forced out of hiding on Tatooine to embark on a mission to rescue Leia, after she is kidnapped by the Galactic Empire's Jedi-hunting Inquisitors. Kenobi will face Vader once again after their duel on Mustafar ten years prior.</p>
            <div class="button">
                <a href="#"><i class="fa-solid fa-play"></i>Play</a>
                <a href="#"><i class="fa-solid fa-plus"></i>My list</a>
            </div>
        </div>
        <a class="play" onclick="toggleVideo();"><img src="{{asset('images/play.png')}}">Watch Trailer</a>
    </div>
    <div class="trailer">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/3Yh_6_zItPU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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