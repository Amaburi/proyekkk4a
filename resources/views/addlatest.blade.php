<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/addmovie.css')}}">
</head>
<body>
    <div class="login-box">
        <h2>Movie</h2>
        <form action="{{route('addlatest.store')}}" method="POST">
            {{csrf_field()}}
          <div class="user-box">
            <input type="text" name="name" id="name" required="">
            <label>Movie Name</label>
          </div>
          <div class="user-box">
            <input type="text" name="page" id="page" required="">
            <label>Movie Page Name</label>
          </div>
          <div class="user-box">
            <input type="file" name="image" id="image" required="">
            <label>Image</label>
          </div>
          <div class="user-box">
            <input type="text" name="desc" id="desc" required="">
            <label>Description</label>
          </div>
          <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <input type="submit" value="SUBMIT">
          </a>
        </form>
      </div>
</body>
</html>