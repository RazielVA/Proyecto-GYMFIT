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
    <link rel="stylesheet" href="{{ asset('css/styletile.css') }}">
    <link rel="stylesheet" href="{{ asset('https://use.fontawesome.com/releases/v5.0.13/css/all.css') }}">
</head>
<body>


<div class="container">
    <header class="row he">
        <div class="col-5">
            <img class="im" src="{{URL::asset('../imgHD/propuesta.png')}}">

        </div>
        <div class="span8">
            <h1>GYMFIT</h1>
            <h2>Style Tile</h2>
            <p><em>Version: 1.0</em></p>
        </div>
    </header>

    <div class="row ca">
            <h3>Colores</h3>
    </div>
            <div class="row colores">
                <div class="col-sm circle" id="c1"></div>
                <div class="col-sm circle" id="c2"></div>
                <div class="col-sm circle" id="c3"></div>
                <div class="col-sm circle" id="c4"></div>
                <div class="col-sm circle" id="c5"></div>
            </div>

    <div class="row ca">
        <h3>Botones</h3>
    </div>
    <div class="row botones">
        <div class="col-sm boton" id="b1"><button class="btn bg-purple">Boton1</button></div>
        <div class="col-sm boton" id="b2"><button class="btn bg-danger">Boton2</button></div>
        <div class="col-sm boton" id="b3"><button class="btn btn-large">Boton3</button></div>

    </div>
    <div class="row ca">
        <h3>Imagenes</h3>
    </div>
    <div class="row imagenes" >
        <div class="col-sm">
            <img src="{{URL::asset('imgHD/1.jpg')}}" style="width: 300px;border-radius: 7%;" alt="" />
        </div>
        <div class="col-sm">
            <img src="{{URL::asset('imgHD/2.jpg')}}" style="width: 300px;border-radius: 7%;" alt="" />
        </div>
        <div class="col-sm">
            <img src="{{URL::asset('imgHD/3.jpg')}}" style="width: 300px;border-radius: 7%;" alt="" />
        </div>
    </div>
    <div class="row imagenes">
        <div class="col-sm">
            <img src="{{URL::asset('imgHD/4.jpg')}}" style="width: 300px;border-radius: 7%; " alt="" />
        </div>
        <div class="col-sm">
            <img src="{{URL::asset('imgHD/5.jpg')}}" style="width: 300px;border-radius: 7%;" alt="" />
        </div>
        <div class="col-sm">
            <img src="{{URL::asset('imgHD/6.jpg')}}" style="width: 300px;border-radius: 7%;" alt="" />
        </div>

    </div>
    <div class="row ca">
        <h3>Textos</h3>
    </div>
    <div class="row fonts">
        <div class="col-sm">
            <h1 class="f" style=" color: black">Ejemplo de h1</h1>
            <h2 class="f" style=" color: black">Ejemplo de h2</h2>
            <h3 class="f" style=" color: black">Ejemplo de h3</h3>
            <h4 class="f" style=" color: black">Ejemplo de h4</h4>
            <h5 class="f" style=" color: black">Ejemplo de h5</h5>
        </div>

    </div>


</div> <!-- container end -->
</body>
</html>

