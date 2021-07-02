<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('indicador') }}
            {{ Form::text('indicador', $indicadorkpi->indicador, ['class' => 'form-control' . ($errors->has('indicador') ? ' is-invalid' : ''), 'placeholder' => 'Indicador']) }}
            {!! $errors->first('indicador', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagen') }}
            {{ Form::text('imagen', $indicadorkpi->imagen, ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $indicadorkpi->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $indicadorkpi->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('formato') }}
            {{ Form::text('formato', $indicadorkpi->formato, ['class' => 'form-control' . ($errors->has('formato') ? ' is-invalid' : ''), 'placeholder' => 'Formato']) }}
            {!! $errors->first('formato', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('umbral1') }}
            {{ Form::text('umbral1', $indicadorkpi->umbral1, ['class' => 'form-control' . ($errors->has('umbral1') ? ' is-invalid' : ''), 'placeholder' => 'Umbral1']) }}
            {!! $errors->first('umbral1', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('umbral2') }}
            {{ Form::text('umbral2', $indicadorkpi->umbral2, ['class' => 'form-control' . ($errors->has('umbral2') ? ' is-invalid' : ''), 'placeholder' => 'Umbral2']) }}
            {!! $errors->first('umbral2', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('umbral3') }}
            {{ Form::text('umbral3', $indicadorkpi->umbral3, ['class' => 'form-control' . ($errors->has('umbral3') ? ' is-invalid' : ''), 'placeholder' => 'Umbral3']) }}
            {!! $errors->first('umbral3', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('umbral4') }}
            {{ Form::text('umbral4', $indicadorkpi->umbral4, ['class' => 'form-control' . ($errors->has('umbral4') ? ' is-invalid' : ''), 'placeholder' => 'Umbral4']) }}
            {!! $errors->first('umbral4', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('activo') }}
            {{ Form::text('activo', $indicadorkpi->activo, ['class' => 'form-control' . ($errors->has('activo') ? ' is-invalid' : ''), 'placeholder' => 'Activo']) }}
            {!! $errors->first('activo', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>