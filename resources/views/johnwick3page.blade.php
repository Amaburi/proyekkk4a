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
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <header>
        <a href="latest" class="logo"><img src="{{asset('images/Logo.png')}}"></a>
    <ul class="navigation">
        <li class="nav-item">
            
          </li>
    </ul>
    </form>
    </header>
    <div class="banner">
        <img src="{{asset('images/johnwick.jpg')}}">
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

   <div class="comment">
       <h2>Comment Here</h2>
       <form method="POST" action="{{route('johnwick3page.store')}}">
         {{csrf_field()}}
           <input type="text" name="user" id="user" placeholder="username">
           <textarea name="comment" id="comment" placeholder="Comment Here"></textarea>
           <div class="btn">
               <input type="submit" value="Comment">
               <button id="clear">Cancel</button>
           </div>
       </form>
   </div>
   <div class="section">
    <h3>COMMENT SECTION</h3>  
   </div>
   <div class="testimonial-box-container">
    @foreach ($johnwick3page as $comment)
       <div class="testimonial-box">
           {{-- top --}}
           <div class="box-top">
               {{-- profile --}}
               <div class="profile">
                   {{-- review --}}
                   <div class="name-user">
                       <span><strong>{{$comment->user}}</strong></span>
                   </div>
               </div>
               <div class="reviews">
                   
                </div>
                <div class="comment-section">
                    <p>{{$comment->comment}}</p>
                </div>
           </div>
       </div>
    @endforeach
   </div>

   <script>
       let listVideo = document.querySelectorAll(' .video-list .vid');
       let mainVideo = document.querySelector(' .main-video video');
       let title = document.querySelector(' .main-video .title');

       var field = document.querySelector('textarea');
       var backup = field.getAttribute('placeholder');
       var btn = document.querySelector('.btn');
       var clear = document.getElementById('clear'); 

       field.onfocus = function(){
           this.setAttribute('placeholder','');
           this.style.borderColor = '#333';
           btn.style.display = 'block';
       }

       field.onblur = function(){
           this.setAttribute('placeholder',backup);
           this.style.borderColor = '#aaa';
       }

       clear.onclick = function(){
           btn.style.display = 'none';
           field.value = '';
       }

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
</body>
</html>