@extends('layouts.app')
@section('links')
    <link href="{{ asset('css/tarjeta.css') }}" rel="stylesheet">
@endsection
    @section('content')
    <body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container ">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <div class="card user-card fondo">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-md-8 d-flex justify-content-end">
                                <div class="foto">
                                    @if($usuario->sexo  == "hombre")
                                        <img src="{{URL::asset('imgHD/userMen.png')}}" width="100px" alt="User-Profile-Image">
                                    @else
                                        <img src="{{URL::asset('imgHD/userWoman.png')}}" width="100px" alt="User-Profile-Image">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4 d-flex align-items-end">
                                <div class="modif">
                                    <button type="button" class="btn btn-secondary">
                                        <i class="fas fa-edit"></i>Modificar
                                    </button>
                                </div>
                            </div>
                        </div>


                        <h6 class="f-w-600 m-t-25 m-b-10">{{$usuario->name}} {{$usuario->apellido}}</h6>
                        <p>{{$usuario->sexo}} | {{$usuario->dob}}</p>
                        <p>{{$usuario->email}}</p>
                        <hr>
                        @if($numeroR==0)
                            <h5>No tienes rutinas!</h5>
                        @else
                        @foreach($rutinas as $r)
                        <div class="fondo2 counter-block m-t-10 p-20">

                            <div class="row">
                                <div class="col-3">
                                    <i class="fa fa-comment"></i>
                                    <p>{{$r->nombre}}</p>
                                </div>
                                <div class="col-3">
                                    <i class="fa fa-user"></i>
                                    <p><a href="{{route("id_rutina",$r->id)}}">ver rutina</a></p>
                                </div>
                                <div class="col-3">
                                    <i class="fa fa-suitcase"></i>
                                    <p><a href="#">Modificar</a></p>
                                </div>
                                <div class="col-3">
                                    {!! Form::open(['method' => 'DELETE','route' => ['rutinaSemanal.destroy', $r->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </div>

                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection