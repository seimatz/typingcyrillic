<!DOCTYPE html>
  <html>
    <head>

      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
      <link rel="stylesheet" href={{ asset('css/game.css?4')}} >
      <link rel="stylesheet" href={{ asset('css/chart.css')}} >

      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
      <meta http-equiv="content-language" content="jp">
      <meta name="robots" content="index,follow">
      <meta name="description" content="キリル文字のタイピングを練習するウェブアプリです。ロシア語、ウクライナ語、ブルガリア語のタイピングを練習できます。
      This is the web app for practicing touch typing in Cyrillic alphabets (Russian, Ukrainian, Bulgarian, and etc).">

      <title>@yield('title')</title>

    </head>

    <body class="blue-grey lighten-5">
    <nav>
      <div class="nav-wrapper teal accent-4">
        <a href="/" class="brand-logo center">Typing.Cyrillic Beta</a>
      </div>
    </nav>

@yield('content')

      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src={{ asset('js/materialize.min.js')}}></script>
      <script>
        $(document).ready(function(){
          $('.modal-trigger').leanModal();
        });
      </script>
      <!-- load js only game window -->
      @if (Request::segment(1) == "game")
      <script type="text/javascript" src={{ asset('js/typingru.js?2') }}></script>
      @endif

      </body>
  </html>
