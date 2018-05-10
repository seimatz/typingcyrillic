<!DOCTYPE html>
  <html>
    <head>

      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
      <!-- <link rel="stylesheet" href={{ asset('css/materialize.min.css')}} > -->
      <link rel="stylesheet" href={{ asset('css/game.css?1')}} >
      <link rel="stylesheet" href={{ asset('css/chart.css')}} >
<!--       <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/game.css"/>
 -->

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
      <meta http-equiv="content-language" content="en">
      <title>@yield('title')</title>

    </head>

    <body class="blue-grey lighten-5">
    <nav>
      <div class="nav-wrapper teal accent-4">
        <a href="/" class="brand-logo center">Typing.Slavic Beta</a>
      </div>
    </nav>

@yield('content')


      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script> -->
      <script type="text/javascript" src={{ asset('js/materialize.min.js')}}></script>
      <script type="text/javascript" src={{ asset('js/typingru.js?2') }}></script>

      </body>
  </html>
