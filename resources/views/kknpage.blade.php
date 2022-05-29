<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KKN DI DESA PENARI</title>

    <!-- styles -->
    <link rel="stylesheet" href="{{asset('css/kknpage.css')}}" />
  </head>
  <body>
    <header>
      <ul class="navigation">
        <li class="nav-item">
          <a class="nav-link" href="latest">Cast</a>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="latest">BACK</a>
          </li>
    </ul>

    </header>
    <div class="container">
      <h1>KKN DI DESA PENARI</h1>
      <div class="video-container">
        <div class="video"><img src="{{asset('images/kkn.jpg')}}" alt=""><video src="{{asset('videos/kkn.mp4')}}" muted></video></div>
      </div>
      <div class="popup-video">
        <span>&times;</span>
        <video src="{{asset('videos/kkn.mp4')}}" mute controls></video>
      </div>
    </div>
    <script src="{{asset('js/kknpage.js')}}"></script>
  </body>
</html>
