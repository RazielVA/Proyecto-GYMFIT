@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ejercicios</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('ejercicios.create') }}"> Crear nuevo ejercicio</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Ruta imagen</th>
            <th>Explicación</th>
            <th>Tiempo</th>
            <th>Material</th>
            <th>Posición</th>
            <th>Consejo</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($ejercicios as $e)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $e->ejercicio}}</td>
                <td>{{ $e->imagen}}</td>
                <td>{{ $e->explicacion}}</td>
                <td>{{ $e->tiempo}}</td>
                <td>{{ $e->material}}</td>
                <td>{{ $e->posicion}}</td>
                <td>{{ $e->consejo}}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('ejercicios.show',$e->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('ejercicios.edit',$e->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['ejercicios.destroy', $e->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>


    {!! $ejercicios->links() !!}
@endsection