@extends('layouts.App')
@section('links')
	<link href="{{ asset('css/mainFilter.css') }}" rel="stylesheet">
	<script src="{{ asset('js/js.js') }}"></script>

@endsection
@section('content')
<div class="container">
    	<div class="row" id="cont">
    		<div class="col-md-3">
			</div>
    		<div class="col-md-9">
				<form action="{{route('rutinaPersonalizada')}}" method="get">
    			<div class="card">
    				<h3 class="card-header text-center">Responde a estas preguntas para saber mas de ti</h3>
    				<div class="card-body">
						<h5 class="card-title">Nombre de tu rutina</h5>
						<input class="form-control" type="text" name="nombre" required>
						<h5 class="card-title">¿Que modaliad quieres?</h5>
						<select required name="modalidad" class="form-control" id="exampleSelect1">
							<option></option>
								<option value="1">Definir</option>
								<option value="2">Mantener</option>
								<option value="3">Muscular</option>
						</select>
						<h5 class="card-title">¿Cuánto tiempo llevas sin hacer deporte?</h5>
    					<select required onchange="cambiarDia(this.value)" name="nivel" class="form-control" id="exampleSelect1" >
							<option></option>
						    <option value="3" >Mucho</option>
						    <option value="2" >Poco</option>
						    <option value="1" >Muy Poco</option>
					    </select>
						<div id="diasSemana" style="display:none;">
							<h5 class="card-title">Escoge solo <b id="dia"></b> dias</h5>
							<label>Lunes <input name="lunes" value="lunes" type="checkbox"></label>
							<label>Martes <input name="martes" value="martes" type="checkbox"></label>
							<label>Miercoles <input name="miercoles" value="miercoles" type="checkbox"></label>
							<label>Jueves <input name="jueves" value="jueves" type="checkbox"></label>
							<label>Viernes <input name="viernes" value="viernes" type="checkbox"></label>
							<label>Sabado <input name="sabado" value="sabado" type="checkbox"></label>
							<label>Domingo <input name="domingo" value="domingo" type="checkbox"></label>
						</div>
    				</div></br></br>
    				<div class="row">
    					<div class="col-md-4"></div>
    					<div class="col-md-4">
    						<input type="submit" class="btn btn-outline-dark" role="button" aria-pressed="true">
    					</div>

    					<div class="col-md-4"></div>
    				</div>
    			</div>
				</form>
    	</div>
    </div>
</div>
@endsection