<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PlayPadel') }}</title>
    {{-- <title>Developers::@yield('title')::</title> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">

    <!-- JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Scripts -->
    <script>

         window.PlayPadel = {!! json_encode([
           'csrfToken' => csrf_token(),
         ]) !!};

    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img alt="Brand" src="/img/logoMenu.png">
                        {{-- {{ config('app.name', 'PlayPadel') }} --}}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav menu">
                      <li><img></li>
                      <li id="li"><a href="{{ url('partidos') }}">Partidos</a></li>
                      <li id="li"><a href="{{ url('reservar') }}">Reservar</a></li>
                      <li id="li"><a href="{{ url('clases') }}">Clases</a></li>
                      <li id="li"><a href="{{ url('torneo') }}">Torneos</a></li>
                      <li id="li"><a href="{{ url('tienda') }}">Tienda</a></li>

                      {{-- @if (Auth::guest())
                      @else
                        <li><a href="{{ url('menu') }}">Usuarios</a></li>
                     @endif --}}
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right menu">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li id="li"><a href="{{ route('login') }}">Login</a></li>
                            <li id="li"><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown" id="li">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        {{-- @if (Auth::guest('admin'))
                          <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  {{ Auth::guard('admin')->name }} <span class="caret"></span>
                              </a>

                              <ul class="dropdown-menu" role="menu">
                                  <li>
                                      <a href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                          Logout
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          {{ csrf_field() }}
                                      </form>
                                  </li>
                              </ul>
                          </li>
                        @endif --}}
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

    </div>

    <hr>

    <div class="row" style="margin-top: 2%;">
      <div class="col-md-8 col-md-offset-2">
        <h3 style="text-align:center;">Patrocinadores principales</h3>
      </div>
    </diV>
    <br>
    <div class="row">
      <div class="col-md-2 col-md-offset-3">
        <img src="/img/patrocinio1.png" alt="World Padel Tour" width="180" height="105">
      </div>
      <div class="col-md-2 ">
        <img src="/img/patrocinio4.jpg" alt="Padelmania" width="180" height="105">
      </div>
      <div class="col-md-2 ">
        <img src="/img/patrocinio3.png" alt="Padel Club el muelle" width="180" height="105">
      </div>
    </diV>

    <div class="fondo_pie">
      <div style="text-align:center;">
        <img src="/img/playpadel.png" style="width:260px; height:254px; margin-top: 2%;"/>
      </div>
      <div style="text-align:center; margin-left:2%;">
        <a href="https://www.facebook.com/worldpadeltour/?fref=ts" target="_blank"><img class="redesSociales" src="/img/face.png"  alt="facebook"/></a>
        <a href="https://twitter.com/worldpadeltour?lang=es" target="_blank"><img class="redesSociales" src="/img/twitter.png" alt="twitter"/></a>
        <a href="https://www.youtube.com/user/WorldPadelTourAJPP" target="_blank"><img class="redesSociales" src="/img/youtube.png" alt="youtube"/></a>
      </div>
    </div>

    <hr>

      <div class="row">
          <div class="col-lg-12 text-center">
              <p>&copy;2017 PlayPadel. Todos los derechos reservados</p>
          </div>
      </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
