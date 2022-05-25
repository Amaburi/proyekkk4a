<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/e103d6b7c3.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <a href="#" class="logo"><img src="image/logo.png"></a>
    <ul class="navigation">
        <li><a href="#">HOME</a></li>
        <li><a href="#">TV SHOWS</a></li>
        <li><a href="#">MOVIES</a></li>
        <li><a href="#">LATEST</a></li>
        <li><a href="#">MY LIST</a></li>
    </ul>
    <div class="search">
        <input type="text" placeholder="Search">
        <i class="fa-solid fa-magnifying-glass"></i>
    </div>
    </header>
    <div class="banner">
        <img src="image/bg.jpg">
        <div class="content">
            <img src="image/name.png" class="movietitle">
            <h4>
                <span>2020</span>
                <span><i>13+</i></span>
                <span>1h 55min</span>
                <span>Action Adventure</span>
            </h4>
            <p>In Imperial China, Hua Mulan is an adventurous and active girl, to the disappointment of her parents, who hopes that one day she will be wed to a good husband. As a young woman, Mulan is forced to meet with a matchmaker to demonstrate her fitness as a future wife. Mulan, flustered, attempts to pour tea in front of the matchmaker, but a spider causes a panic that destroys the kettle, and the matchmaker calls her a disgrace in front of her family</p>
            <div class="button">
                <a href="#"><i class="fa-solid fa-play"></i>Play</a>
                <a href="#"><i class="fa-solid fa-plus"></i>My list</a>
            </div>
        </div>
        <a class="play" onclick="toggleVideo();"><img src="image/play.png">Watch Trailer</a>
    </div>
    <div class="trailer">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/KK8FHdFluOQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <img src="image/close.png" class="close" onclick="toggleVideo();">
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