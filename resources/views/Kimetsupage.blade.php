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
   <h3 class="heading">Kimetsu No Yaiba</h3> 
   <div class="container">

       <div class="main-video">
           <div class="video">
              <video src="{{asset('videos/kimetsu/Kimetsu10.mkv')}}" controls></video>
              <h3 class="title">10.Kimetsu No Yaiba</h3>  
           </div>
       </div>
       <div class="video-list">
           <div class="vid active">
              <video src="{{asset('videos/kimetsu/Kimetsu09.mkv')}}" controls  ></video>
              <h3 class="title">09.Kimetsu No Yaiba</h3>
           </div>
           <div class="vid">
            <video src="{{asset('videos/kimetsu/Kimetsu08.mkv')}}" controls ></video>
            <h3 class="title">08.Kimetsu No Yaiba</h3>
         </div>
         <div class="vid">
            <video src="{{asset('videos/spyfamily/Spyfamily03.mkv')}}" controls ></video>
            <h3 class="title">07.Kimetsu No Yaiba</h3>
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