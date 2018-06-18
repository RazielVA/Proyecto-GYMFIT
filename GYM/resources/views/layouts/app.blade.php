<?php use App\Grupo;use Illuminate\Support\Facades\DB;?>
        <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'GymFitness') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('https://use.fontawesome.com/releases/v5.0.13/css/all.css') }}">
    @yield('links')
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-lg navbar-dark bg-purple">
        <div class="container">
            <a class="navbar-brand" href="{{ url('home') }}">
                <img src="{{URL::asset('../imgHD/propuesta.png')}}">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Grupos Musculares
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="gpm">
                                    <?php $grupos= DB::table("grupos")->limit(12)->get();?>
                                    @foreach($grupos as $g)
                                        <a class="dropdown-item" id="gpmh" href="{{URL::to('ejerciciosGru/' . $g->id) }}">{{ucwords($g->grupo)}}</a>
                                    @endforeach
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="estiramientos" href="{{route('est')}}">Estiramientos</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Modalidades
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="gpm">
                                    <a class="dropdown-item" id="gpmh" href="{{route('mod', 1)}}">Definir</a>
                                    <a class="dropdown-item" id="gpmh" href="{{route('mod', 2)}}">Mantener</a>
                                    <a class="dropdown-item" id="gpmh" href="{{route('mod', 3)}}">Muscular</a>

                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Generar rutina aleatoria
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="gpm">
                                    <a class="dropdown-item" id="gpmh" href="{{route('id_rutina_ale', 1)}}">BICEPS-TRICEPS-ELPALDA</a>
                                    <a class="dropdown-item" id="gpmh" href="{{route('id_rutina_ale', 2)}}">ABDOMEN-HOMBRO-PECHO</a>
                                    <a class="dropdown-item" id="gpmh" href="{{route('id_rutina_ale', 2)}}">GEMELOS-MUSLO-GLUTEO</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="rutinas" href="{{URL::to('filter')}}">Rutinas personalizadas</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="gpm">

                                    <a class="dropdown-item" id="gpmh" href="{{route('perfil')}}">
                                        {{ __('Ver perfil') }}
                                    </a>

                                    <a class="dropdown-item" id="gpmh" href="{{ route('login') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="row">
        @yield('content')
    </div>
</div>
<div class="row" id="pie">
    <div class="col-md-5 d-flex justify-content-center">
        <h3  class="titulo">Síguenos en nuestras cuentas</h3>
    </div>
    <div class="col-md-7 d-flex justify-content-center">
        <ul class="ulogo">
            <li class="lilogo"><i class="fab fa-facebook"></i></li>
            <li class="lilogo"><i class="fab fa-twitter"></i></li>
            <li class="lilogo"><i class="fab fa-instagram"></i></li>
        </ul>
    </div>
</div>

</body>
</html>

