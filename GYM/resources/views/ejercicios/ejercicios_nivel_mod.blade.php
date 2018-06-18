@extends('layouts.app')
@section('links')
    <link href="{{ asset('css/mainCuadros.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="container py-3">
        @foreach($ejercicios as $e)
        <div class="card" style="margin-top: 50px;padding: 20px;margin-bottom: 70px;">
            <div class="row ">
                <div class="col-md-4">
                    <img src="{{URL::asset('../imgEjercicios/'.$e->imagen)}}" class="w-100">
                </div>
                <div class="col-md-8 px-3">
                    <div class="card-block px-3">
                        <h4 class="card-title">{{ucwords($e->ejercicio)}}</h4>
                        <p class="card-text"><b>Repeticiones: </b>{{$entreno->repeticiones}}</p>
                        <p class="card-text"><b>Series: </b>{{$entreno->serie}}</p>
                        <p class="card-text"><b>Peso: </b>{{$entreno->peso}} <b>Kg</b></p>
                        @if($entreno->nivel==3)
                            <p class="card-text"><b>Nivel: </b>Principiante</p>
                        @elseif($entreno->nivel ==2)
                            <p class="card-text"><b>Nivel: </b>Intermedio</p>
                        @else
                            <p class="card-text"><b>Nivel: </b>Avanzado</p>
                            @endif
                        <p class="card-text"><b>Explicación: </b>{{$e->explicacion}}</p>
                        <p class="card-text"><b>Posición: </b>{{$e->posicion}}</p>
                        <p class="card-text"><b>Consejo: </b>{{$e->consejo}}</p>
                        <a href="#" class="btn btn-primary">Ver video</a>
                    </div>
                </div>

            </div>
        </div>
        @endforeach
    </div>
@endsection