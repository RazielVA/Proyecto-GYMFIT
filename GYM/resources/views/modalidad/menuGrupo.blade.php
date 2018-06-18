@extends('layouts.app')
@section('links')
    <link href="{{ asset('css/mainCuadros.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="container gallery-container" style="padding-bottom: 130px; padding-top: 50px;">
        <div class="row">
            <h1>Que grupo muscular quieres {{$nombreMod->nombre}} ?</h1>
        </div>
        <div class="tz-gallery">

            <div class="row">
                @foreach($grupos as $g)
                    <div class="col-sm-6 col-md-4">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-10"><a href="{{route('idMo_idGru', ['g' => $g->id, 'idMo' => $id_mod, 'nivel' => $nivel])}}" class="item btn btn-dark btn-lg btn-block" role="button" aria-pressed="true">{{ucwords($g->grupo)}}</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection