@extends('layouts.app')
@section('links')
    <link href="{{ asset('css/estiramiento.css') }}" rel="stylesheet">
    <script src="{{ asset('js/js.js') }}"></script>

@endsection
@section('content')
    <div class="container py-3">
        @php($x=0)
        @foreach($ejEst as $e)
            <div class="card" style="margin-top: 50px;padding: 20px;margin-bottom: 70px;">
                <div class="row ">
                    <div class="col-md-4">
                        <img src="{{URL::asset('../imgEjercicios/'.$e->imagen)}}" class="w-100">
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">
                            <h4 class="card-title">{{ucwords($e->ejercicio)}}</h4>
                            <p class="card-text"><b>Explicación: </b>{{$e->explicacion}}</p>
                            <p class="card-text"><b>Consejo: </b>{{$e->consejo}}</p>
                            <p class="card-text"><b>Tiempo: </b>{{$e->tiempo}}</p>
                            <div class="row">
                            <div class="col-xl-9 col-md-7 col-sm-6"><a  onclick="mycontador({{$x}})" class="btn btn-primary">Iniciar contador</a></div>
                            <div class="col-xl-2 col-md-3 col-sm-3" id="circulo">
                                <p id="contador{{$x}}">30</p>
                            </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @php($x++)
        @endforeach
    </div>
@endsection