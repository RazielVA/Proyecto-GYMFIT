<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Ejercicio:</strong>
            {!! Form::text('ejercicio', null, array('placeholder' => 'Ejercicio','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Imagen:</strong>
            {!! Form::text('imagen', null, array('placeholder' => 'Imagen','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Explicación:</strong>
            {!! Form::text('explicacion', null, array('placeholder' => 'Explicación','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tiempo:</strong>
            {!! Form::text('tiempo', null, array('placeholder' => 'Tiempo','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Material:</strong>
            {!! Form::text('material', null, array('placeholder' => 'Material','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Posición:</strong>
            {!! Form::text('posicion', null, array('placeholder' => 'Posición','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Consejo:</strong>
            {!! Form::text('consejo', null, array('placeholder' => 'Consejo','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>