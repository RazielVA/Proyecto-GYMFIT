@extends('layouts.app')
@section('links')
    <link href="{{ asset('css/basic.css') }}" rel="stylesheet">
    {{--<script src="{{ asset('js/js.js') }}"></script>--}}
@endsection
@section('content')
    <div class="container" id="c">
        <h1>Rutina semanal</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
        <table class="table" id="miTablaPersonalizada">
            <thead>
            <tr>
                <th >Lunes</th>
                <th >Martes</th>
                <th>Miercoles</th>
                <th >Jueves</th>
                <th >Viernes</th>
                <th >Sabado</th>
                <th >Domingo</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @php($cont=0)
                <td>

                    @foreach($ejLunes as $key => $e)
                        @if($e["ejercicio"]=="Descanso")
                            <p>{{$e["ejercicio"]}}</p>
                        @else
                        <!-- Button trigger modal -->
                            <p class="btn" data-toggle="modal" data-target="#exampleModal{{$cont}}">
                                {{ucfirst($e["ejercicio"])}}
                            </p>

                            <!-- Modal -->
                            <div  class="modal fade " id="exampleModal{{$cont}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg " role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ucfirst($e["ejercicio"])}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body row">
                                            <div class="col-md-6"><img src="../imgEjercicios/{{$e["imagen"]}}" alt="{{$e["imagen"]}}"></div>
                                            <div class="col-md-6">
                                                <p><b>Nivel: </b>{{$rutina->nivel}}</p>
                                                <p><b>Explicación: </b>{{$e["explicacion"]}}</p>
                                                <p><b>Material: </b>{{$e["material"]}}</p>
                                                <p><b>Posición: </b>{{$e["posicion"]}}</p>
                                                <p><b>Consejo: </b>{{$e["consejo"]}}</p>
                                                <p><b>Repeticiones: </b>{{$rutina->repeticiones}}</p>
                                                <p><b>Serie: </b>{{$rutina->serie}}</p>
                                                <p><b>Peso</b>{{$rutina->peso}}</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @php($cont++)
                        @endforeach
                </td>
                <td>
                    @foreach($ejMartes as $key => $e)<!-- Button trigger modal -->
                        @if($e["ejercicio"]=="Descanso")
                            <p>{{$e["ejercicio"]}}</p>
                        @else
                        <!-- Button trigger modal -->
                            <p class="btn" data-toggle="modal" data-target="#exampleModal{{$cont}}">
                                {{ucfirst($e["ejercicio"])}}
                            </p>

                            <!-- Modal -->
                            <div  class="modal fade " id="exampleModal{{$cont}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg " role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ucfirst($e["ejercicio"])}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body row">
                                            <div class="col-md-6"><img src="../imgEjercicios/{{$e["imagen"]}}" alt="{{$e["imagen"]}}"></div>
                                            <div class="col-md-6">
                                                <p><b>Nivel: </b>{{$rutina->nivel}}</p>
                                                <p><b>Explicación: </b>{{$e["explicacion"]}}</p>
                                                <p><b>Material: </b>{{$e["material"]}}</p>
                                                <p><b>Posición: </b>{{$e["posicion"]}}</p>
                                                <p><b>Consejo: </b>{{$e["consejo"]}}</p>
                                                <p><b>Repeticiones: </b>{{$rutina->repeticiones}}</p>
                                                <p><b>Serie: </b>{{$rutina->serie}}</p>
                                                <p><b>Peso</b>{{$rutina->peso}}</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @php($cont++)
                    @endforeach
                </td>
                <td>
                    @foreach($ejMiercoles as $key => $e)<!-- Button trigger modal -->
                        @if($e["ejercicio"]=="Descanso")
                            <p>{{$e["ejercicio"]}}</p>
                        @else
                        <!-- Button trigger modal -->
                            <p class="btn" data-toggle="modal" data-target="#exampleModal{{$cont}}">
                                {{ucfirst($e["ejercicio"])}}
                            </p>

                            <!-- Modal -->
                            <div  class="modal fade " id="exampleModal{{$cont}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg " role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ucfirst($e["ejercicio"])}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body row">
                                            <div class="col-md-6"><img src="../imgEjercicios/{{$e["imagen"]}}" alt="{{$e["imagen"]}}"></div>
                                            <div class="col-md-6">
                                                <p><b>Nivel: </b>{{$rutina->nivel}}</p>
                                                <p><b>Explicación: </b>{{$e["explicacion"]}}</p>
                                                <p><b>Material: </b>{{$e["material"]}}</p>
                                                <p><b>Posición: </b>{{$e["posicion"]}}</p>
                                                <p><b>Consejo: </b>{{$e["consejo"]}}</p>
                                                <p><b>Repeticiones: </b>{{$rutina->repeticiones}}</p>
                                                <p><b>Serie: </b>{{$rutina->serie}}</p>
                                                <p><b>Peso</b>{{$rutina->peso}}</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @php($cont++)
                    @endforeach
                </td>
                <td>
                    @foreach($ejJueves as $key => $e)
                        @if($e["ejercicio"]=="Descanso")
                            <p>{{$e["ejercicio"]}}</p>
                        @else
                        <!-- Button trigger modal -->
                            <p class="btn" data-toggle="modal" data-target="#exampleModal{{$cont}}">
                                {{ucfirst($e["ejercicio"])}}
                            </p>

                            <!-- Modal -->
                            <div  class="modal fade " id="exampleModal{{$cont}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg " role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ucfirst($e["ejercicio"])}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body row">
                                            <div class="col-md-6"><img src="../imgEjercicios/{{$e["imagen"]}}" alt="{{$e["imagen"]}}"></div>
                                            <div class="col-md-6">
                                                <p><b>Nivel: </b>{{$rutina->nivel}}</p>
                                                <p><b>Explicación: </b>{{$e["explicacion"]}}</p>
                                                <p><b>Material: </b>{{$e["material"]}}</p>
                                                <p><b>Posición: </b>{{$e["posicion"]}}</p>
                                                <p><b>Consejo: </b>{{$e["consejo"]}}</p>
                                                <p><b>Repeticiones: </b>{{$rutina->repeticiones}}</p>
                                                <p><b>Serie: </b>{{$rutina->serie}}</p>
                                                <p><b>Peso</b>{{$rutina->peso}}</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @php($cont++)
                    @endforeach
                </td>
                <td>
                    @foreach($ejViernes as $key => $e)
                        @if($e["ejercicio"]=="Descanso")
                            <p>{{$e["ejercicio"]}}</p>
                        @else
                        <!-- Button trigger modal -->
                            <p class="btn" data-toggle="modal" data-target="#exampleModal{{$cont}}">
                                {{ucfirst($e["ejercicio"])}}
                            </p>

                            <!-- Modal -->
                            <div  class="modal fade " id="exampleModal{{$cont}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg " role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ucfirst($e["ejercicio"])}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body row">
                                            <div class="col-md-6"><img src="../imgEjercicios/{{$e["imagen"]}}" alt="{{$e["imagen"]}}"></div>
                                            <div class="col-md-6">
                                                <p><b>Nivel: </b>{{$rutina->nivel}}</p>
                                                <p><b>Explicación: </b>{{$e["explicacion"]}}</p>
                                                <p><b>Material: </b>{{$e["material"]}}</p>
                                                <p><b>Posición: </b>{{$e["posicion"]}}</p>
                                                <p><b>Consejo: </b>{{$e["consejo"]}}</p>
                                                <p><b>Repeticiones: </b>{{$rutina->repeticiones}}</p>
                                                <p><b>Serie: </b>{{$rutina->serie}}</p>
                                                <p><b>Peso</b>{{$rutina->peso}}</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                            @php($cont++)
                    @endforeach
                </td>
                <td>
                    @foreach($ejSabado as $key => $e)
                        @if($e["ejercicio"]=="Descanso")
                            <p>{{$e["ejercicio"]}}</p>
                        @else
                        <!-- Button trigger modal -->
                            <p class="btn" data-toggle="modal" data-target="#exampleModal{{$cont}}">
                                {{ucfirst($e["ejercicio"])}}
                            </p>

                            <!-- Modal -->
                            <div  class="modal fade " id="exampleModal{{$cont}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg " role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ucfirst($e["ejercicio"])}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body row">
                                            <div class="col-md-6"><img src="../imgEjercicios/{{$e["imagen"]}}" alt="{{$e["imagen"]}}"></div>
                                            <div class="col-md-6">
                                                <p><b>Nivel: </b>{{$rutina->nivel}}</p>
                                                <p><b>Explicación: </b>{{$e["explicacion"]}}</p>
                                                <p><b>Material: </b>{{$e["material"]}}</p>
                                                <p><b>Posición: </b>{{$e["posicion"]}}</p>
                                                <p><b>Consejo: </b>{{$e["consejo"]}}</p>
                                                <p><b>Repeticiones: </b>{{$rutina->repeticiones}}</p>
                                                <p><b>Serie: </b>{{$rutina->serie}}</p>
                                                <p><b>Peso</b>{{$rutina->peso}}</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @php($cont++)
                    @endforeach
                </td>
                <td>
                    @foreach($ejDomingo as $key => $e)
                        @if($e["ejercicio"]=="Descanso")
                            <p>{{$e["ejercicio"]}}</p>
                        @else
                        <!-- Button trigger modal -->
                            <p class="btn" data-toggle="modal" data-target="#exampleModal{{$cont}}">
                                {{ucfirst($e["ejercicio"])}}
                            </p>

                            <!-- Modal -->
                            <div  class="modal fade " id="exampleModal{{$cont}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg " role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ucfirst($e["ejercicio"])}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body row">
                                            <div class="col-md-6"><img src="../imgEjercicios/{{$e["imagen"]}}" alt="{{$e["imagen"]}}"></div>
                                            <div class="col-md-6">
                                                <p><b>Nivel: </b>{{$rutina->nivel}}</p>
                                                <p><b>Explicación: </b>{{$e["explicacion"]}}</p>
                                                <p><b>Material: </b>{{$e["material"]}}</p>
                                                <p><b>Posición: </b>{{$e["posicion"]}}</p>
                                                <p><b>Consejo: </b>{{$e["consejo"]}}</p>
                                                <p><b>Repeticiones: </b>{{$rutina->repeticiones}}</p>
                                                <p><b>Serie: </b>{{$rutina->serie}}</p>
                                                <p><b>Peso</b>{{$rutina->peso}}</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @php($cont++)
                    @endforeach
                </td>
            </tr>
            </tbody>
        </table>
                </div>
            </div>

        </div>

        <div class="row">
            <a href="#"><h2>Antes de entrenar recuerda hacer estiramientos</h2></a>
        </div>

    </div>
@endsection