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
   <h3 class="heading">John Wick 3</h3> 
   <div class="container">

       <div class="main-video">
           <div class="video">
              <video src="{{asset('videos/parabellum/Parabellum.mkv')}}" controls></video>
              <h3 class="title">John Wick 2</h3>  
           </div>
       </div>
       <div class="video-list">
           <div class="vid active">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/XGk2EfbD_Ps" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <h3 class="title">John Wick 2 Trailer</h3>
           </div>
       </div>
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
   </script>
</body>
</html>
</body>
</html>