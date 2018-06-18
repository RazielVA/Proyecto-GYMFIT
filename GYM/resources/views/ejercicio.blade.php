@extends('layouts.app')
@section('links')
    <link href="{{ asset('css/ejercicioEspecifico.css') }}" rel="stylesheet">
    @endsection
@section('content')
    <div class="container" style="padding-bottom: 100px;padding-top: 50px;">
        <div class="row">
            <div class="col-lg-12" style="padding-bottom: 60px;">
                <h1 class="text-center">{{ucwords($ejercicio->ejercicio)}}</h1>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-4 rounded">
                <img src="../imgEjercicios/{{$ejercicio->imagen}}" width="100%">
            </div>
            <div class="col-lg-7 rounded fondo">
                <div class="row pt-3 text-center">
                    <div class="col-lg-6 ">
                        <h5>
                            TIEMPO
                        </h5>
                        <p>{{$ejercicio->tiempo}}</p>
                    </div>
                    <div class="col-lg-6 ">
                        <h5>MATERIAL</h5>
                        <p>{{$ejercicio->material}}</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg12 pt-3 text-center">
                        <h5 class="text-center">EXPLICACIÓN DEL EJERCICIO</h5>
                    </div>
                </div>
                <div class="row justify-content-cnter">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10 pt-2">
                        <p class="text-center">{{$ejercicio->explicacion}}</p>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg12 pt-3 text-center">
                        <h5 class="text-center">CONSEJOS</h5>
                    </div>
                </div>
                <div class="row justify-content-cnter">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <p class="text-center">{{$ejercicio->posicion}}</p>
                    </div>
                    <div class="col-lg-1"></div>
                </div>

            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
@endsection