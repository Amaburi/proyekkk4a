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
   <h3 class="heading">Spy X Family</h3> 
   <div class="container">

       <div class="main-video">
           <div class="video">
              <video src="{{asset('videos/spyfamily/Spyfamily01.mp4')}}" controls></video>
              <h3 class="title">01.SPY X FAMILY</h3>  
           </div>
       </div>
       <div class="video-list">
           <div class="vid active">
              <video src="{{asset('videos/spyfamily/Spyfamily01.mp4')}}" controls  ></video>
              <h3 class="title">01.SPY X FAMILY</h3>
           </div>
           <div class="vid">
            <video src="{{asset('videos/spyfamily/Spyfamily02.mp4')}}" controls ></video>
            <h3 class="title">02.SPY X FAMILY</h3>
         </div>
         <div class="vid">
            <video src="{{asset('videos/spyfamily/Spyfamily03.mkv')}}" controls ></video>
            <h3 class="title">03.SPY X FAMILY</h3>
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