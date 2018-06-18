@extends('layouts.app')
@section('links')
    <link href="{{ asset('css/ejercicio.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="container gallery-container">
        <div class="row">
        </div>
        <div class="tz-gallery">
            <div class="row">
                @foreach($ejercicios as $ej)
                    <div class="col-sm-6 col-md-4">
                        <h4 style="padding:  5px 0 15px 0">{{$ej->ejercicio}}</h4>
                        <a class="lightbox" href="{{URL::to('ejercicio/' . $ej->id) }}">
                            <img src="{{URL::asset('../imgEjercicios/'.$ej->imagen)}}" alt="{{$ej->ejercicio}}">

                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection