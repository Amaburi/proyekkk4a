<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lorem Ipsum</title>

    <!-- styles -->
    <link rel="stylesheet" href="{{asset('css/loreipsum.css')}}" />
  </head>
  <body>
      <header>
        <ul class="navigation">
            <li class="nav-item">
              <a class="nav-link" href="forfunpage">BACK</a>
            </li>
      </ul>

      </header>
    <section class="section-center">
      <h3>tired of boring lorem ipsum?</h3>
      <form class="lorem-form">
        <label for="amount">paragraphs:</label>
        <input type="number" name="amount" id="amount" placeholder="5" />
        <button type="submit" class="btn">generate</button>
      </form>
      <article class="lorem-text"></article>
    </section>

    <!-- javascript -->
    <script src="{{asset('js/loreipsum.js')}}"></script>
  </body>
</html>
