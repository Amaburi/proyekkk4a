<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/clock.css')}}">
</head>
<body>
    <header>
        <ul class="navigation">
            <li class="nav-item">
                <a class="nav-link" href="forfunpage">BACK</a>
              </li>
        </ul>
    </header>
    <div class="container">
        <div class="clock">
            <div class="circle" id="hr" style="--clr:#faebd7;"><i></i></div>
            <div class="circle circle2" id="mn" style="--clr:#ca3b1e;"><i></i></div>
            <div class="circle circle3" id="sec" style="--clr:#f2c993;"><i></i></div>  

            <span style="--i:1;"><b>1</b></span>
            <span style="--i:2;"><b>2</b></span>
            <span style="--i:3;"><b>3</b></span>
            <span style="--i:4;"><b>4</b></span>
            <span style="--i:5;"><b>5</b></span>
            <span style="--i:6;"><b>6</b></span>
            <span style="--i:7;"><b>7</b></span>
            <span style="--i:8;"><b>8</b></span>
            <span style="--i:9;"><b>9</b></span>
            <span style="--i:10;"><b>10</b></span>
            <span style="--i:11;"><b>11</b></span>
            <span style="--i:12;"><b>12</b></span>
        </div>
        <div id="time">
            <div id="hour" style="--clr:#faebd7;">00</div>
            <div id="minutes" style="--clr:#ca3b1e;">00</div>
            <div id="seconds" style="--clr:#f2c993;">00</div>
            <div id="ampm">AM</div>
        </div>
    </div>
    <script src="{{asset('js/clock.js')}}"></script>
</body>
</html>