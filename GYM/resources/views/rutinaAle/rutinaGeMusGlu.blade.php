@extends('layouts.app')
@section('links')
    <link href="{{ asset('css/rutEjercicios.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="container">
        <div class="row mt-2 text-center" id="cont">
            <div class="col-lg-2 d-flex justify-content-end align-items-center">
                <p class="verticaltext">{{$ge}}</p>
            </div>
            @foreach($eAbdomen as $b)
                <div class="col-lg-2 border border-info">
                    <a href="{{URL::to('ejercicio/' . $b->id) }}"><img src="{{URL::asset('../imgEjercicios/'.$b->imagen)}}">
                        <p>{{ucwords($b->ejercicio)}}</p></a>
                </div>
            @endforeach
            <div class="col-lg-2">
            </div>
            <div class="col-lg-2 d-flex justify-content-end align-items-center">
                <p class="verticaltext">{{$mu}}</p>
            </div>
            @foreach($eHombro as $b)
                <div class="col-lg-2 border border-info">
                    <a href="{{URL::to('ejercicio/' . $b->id) }}"><img src="{{URL::asset('../imgEjercicios/'.$b->imagen)}}">
                        <p>{{ucwords($b->ejercicio)}}</p></a>
                </div>
            @endforeach
            <div class="col-lg-2">
            </div>
            <div class="col-lg-2 d-flex justify-content-end align-items-center">
                <p class="verticaltext">{{$g}}</p>
            </div>
            @foreach($ePecho as $b)
                <div class="col-lg-2 border border-info">
                    <a href="{{URL::to('ejercicio/' . $b->id) }}"><img src="{{URL::asset('../imgEjercicios/'.$b->imagen)}}">
                        <p>{{ucwords($b->ejercicio)}}</p></a>
                </div>
            @endforeach
            <div class="col-lg-2">
            </div>
        </div>
    </div>
@endsection