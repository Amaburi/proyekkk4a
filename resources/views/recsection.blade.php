<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/recsection.css')}}">
</head>
<body>
        <a href="#" class="logo"><img src="{{asset('images/logo.png')}}"></a>
    <ul class="navigation">
         <li class="nav-item">
            <a class="nav-link" href="index">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="product">SHOWS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="latest">LATEST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="list">MY LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="recsection">Comment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">LOG OUT</a>
          </li>
    </ul>
    <div class="search">
        <input type="text" placeholder="Search">
        <i class="fa-solid fa-magnifying-glass"></i>
    </div>
  <footer>
    <div class="form">
      <form name="form1" method="POST" action="{{route('recsection.store')}}">
       {{csrf_field()}}
       <div class="mb-3">
         <label for="usernamee" class="form-label">Username</label>
         <input type="text" class="form-control" id="usernamee" name="username" aria-describedby="emailHelp">
         <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
       </div>
       <div class="mb-3">
         <label for="comment" class="form-label">Comment</label>
         <input type="textarea" class="form-control" id="comment" name="comment">
       </div>
       <button type="submit" class="btn btn-primary">Submit</button>
      </form>
     </div>
  </footer>
</body>
</html>