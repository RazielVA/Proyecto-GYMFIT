@extends('layouts.app')
@section('links')
    {{--<link href="{{ asset('css/mainCuadros.css') }}" rel="stylesheet">--}}
@endsection
@section('content')
    <div class="container" style="padding-top: 50px;padding-bottom: 70px;">
        <h1>Niveles de entrenamiento</h1>
        <div class="row">
        @foreach($entrenos as $e)
                <div class="col-lg-4 " style="padding-top: 30px;">
                    <div class="card" style="width: 18rem;">
                            @if($e->nivel==1)
                            <img class="card-img-top" src="{{URL::asset('../imgHD/muscular.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">AVANZADO</h5>
                            @elseif($e->nivel==2)
                             <img class="card-img-top" src="{{URL::asset('../imgHD/intermedio.jpg')}}" alt="Card image cap">
                             <div class="card-body">
                                <h5 class="card-title">INTERMEDIO</h5>
                            @else
                             <img class="card-img-top" src="{{URL::asset('../imgHD/mantener.jpg')}}" alt="Card image cap">
                             <div class="card-body">
                                <h5 class="card-title">PRINCIPIANTE</h5>
                            @endif
                            <p class="card-text"></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Repeticiones:</b>{{$e->repeticiones}}</li>
                            <li class="list-group-item"><b>Series:</b>{{$e->serie}}</li>
                            <li class="list-group-item">Entrena ya!</li>
                        </ul>
                        <div class="card-body">
                            <a href="{{route('idMod_nivel', ['id_mod' => $e->id_modalidad, 'nivel' => $e->nivel])}}" class="card-link">Ver grupos musculares</a>
                        </div>
                    </div>
                </div>

        @endforeach
        </div>
    </div>
        </div>
    </div>
@endsection