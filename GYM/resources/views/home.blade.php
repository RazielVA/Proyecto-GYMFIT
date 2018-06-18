@extends('layouts.app')

@section('content')
<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide row" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="{{URL::asset('imgHD/1.jpg')}}" style="width:100%;height:700px;" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="{{URL::asset('imgHD/2.jpg')}}" style="width:100%;height:700px;" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="{{URL::asset('imgHD/3.jpg')}}" style="width:100%;height:700px;" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="{{URL::asset('imgHD/4.jpg')}}" style="width:100%;height:700px;" alt="For slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="{{URL::asset('imgHD/5.jpg')}}" style="width:100%;height:700px;" alt="Five slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="row">
        <a href="{{route("styletile")}}"><p>Ver Style Tile</p></a>
    </div>
</div>
@endsection
