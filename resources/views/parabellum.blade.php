<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/spyx.css')}}">
</head>
<body>
    <header>
        <a href="product" class="logo"><img src="{{asset('images/logo.png')}}"></a>
    <ul class="navigation">
    </ul>
    </header>
   <h3 class="heading">John Wick Parabellum</h3> 
   <div class="container">

       <div class="main-video">
           <div class="video">
              <video src="{{asset('videos/parabellum/Parabellum.mkv')}}" controls></video>
              <h3 class="title">John Wick Parabellum</h3>  
           </div>
       </div>
       <div class="video-list">
           <div class="vid active">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/M7XM597XO94" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <h3 class="title">John Wick Parabellum Trailer</h3>
           </div>
       </div>
   </div>
   <script>
       let listVideo = document.querySelectorAll(' .video-list .vid');
       let mainVideo = document.querySelector(' .main-video video');
       let title = document.querySelector(' .main-video .title');

       listVideo.forEach(video =>{
           video.onclick = () =>{
               listVideo.forEach(vid => vid.classList.remove('active'));
               video.classList.add('active');
               if(video.classList.contains('active')){
                   let src = video.children[0].getAttribute('src');
                   mainVideo.src = src;
                   let text = video.children[1].innerHTML;
                   title.innerHTML =text;
               };
           };
       });
   </script>
</body>
</html>
</body>
</html>