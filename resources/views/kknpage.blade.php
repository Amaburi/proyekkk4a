<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Video</title>

    <!-- styles -->
    <link rel="stylesheet" href="{{asset('css/kknpage.css')}}" />
  </head>
  <body>
    <!-- preloader -->
    <div class="preloader">
      <img src="{{asset('image/preloader.gif')}}" alt="preloader" class="preloader__item" />
    </div>
    <!-- header -->
    <header>
        <ul class="navigation">
            <li class="nav-item">
              <a class="nav-link" href="forfunpage">BACK</a>
            </li>
      </ul>
      <video controls muted autoplay loop class="video-container">
        <source src="{{asset('videos/')}}" type="video/mp4">
      </video>
      
      <!-- video switch -->
      <button class="switch-btn">
        <span>
          play
        </span>
        <span>
          pause
        </span>
        <span class="switch"></span>
      </button>
    </header>
    <!-- javascript -->
    <script src="{{asset('js/kknpage.js')}}"></script>
  </body>
</html>
