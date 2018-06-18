@extends('layouts.app')
@section('links')
    <link href="{{ asset('css/rutEjercicios.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="container">
        <div class="row mt-2 text-center" id="cont">
            <div class="col-lg-2 d-flex justify-content-start align-items-center">
                <h2>{{$bi}}</h2>
            </div>
            @foreach($eBiceps as $b)
            <div class="col-xl-2 col-lg-2 col-sm-6 col-xs-3 border border-info">
                <a href="{{URL::to('ejercicio/' . $b->id) }}"><img src="{{URL::asset('../imgEjercicios/'.$b->imagen)}}">
                    <p>{{ucwords($b->ejercicio)}}</p></a>
            </div>
            @endforeach
            <div class="col-lg-2">
            </div>
            <div class=" col-lg-2 d-flex justify-content-start align-items-center">
                <h2>{{$tri}}</h2>
            </div>
            @foreach($eTriceps as $b)
                <div class=" col-xl-2 col-lg-2 col-sm-6 col-xs-3 border border-info">
                    <a href="{{URL::to('ejercicio/' . $b->id) }}"><img src="{{URL::asset('../imgEjercicios/'.$b->imagen)}}">
                        <p>{{ucwords($b->ejercicio)}}</p></a>
                </div>
            @endforeach
            <div class="col-lg-2">
            </div>
            <div class="col-lg-2 d-flex justify-content-start align-items-center">
                <h2>{{$es}}</h2>
            </div>
            @foreach($eEspalda as $b)
                <div class="col-xl-2 col-lg-2 col-sm-6 col-xs-3 border border-info">
                    <a href="{{URL::to('ejercicio/' . $b->id) }}"><img src="{{URL::asset('../imgEjercicios/'.$b->imagen)}}">
                        <p>{{ucwords($b->ejercicio)}}</p></a>
                </div>
            @endforeach
            <div class="col-lg-2">
            </div>
        </div>
    </div>
@endsection