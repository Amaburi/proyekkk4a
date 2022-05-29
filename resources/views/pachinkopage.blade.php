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
        <img src="{{asset('images/pachinkoo.jpg')}}">
        <div class="content">
            
            <h4>
                <span>2022</span>
                <span><i>13+</i></span>
                <span>2h 6min</span>
                <span>Action Adventure</span>
            </h4>
            <p>Pachinko is a period drama depicting Korean immigrant family who left their homeland. Kim Sun Ja was a woman born and raised in Busan during Japanese Colonialism. Meanwhile, Koh Hansu was a Zainichi Korean who lived in Osaka, Japan. Later, Sun Ja and Hansu met each other when Hansu visited Busan. They were in a special relationship. However, Hansu already married with children and couldn’t marry to Sun Ja who was pregnant at that time. In this frustrating situation, a church priest, Baek Isak, saved Sun Ja by marrying her. Later, Sun Ja and Isak moved to Japan. Both were struggle to survive and had to face discrimination.</p>
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