<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $despacho->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechadespacho') }}
            {{ Form::text('fechadespacho', $despacho->fechadespacho, ['class' => 'form-control' . ($errors->has('fechadespacho') ? ' is-invalid' : ''), 'placeholder' => 'Fechadespacho']) }}
            {!! $errors->first('fechadespacho', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('comentario') }}
            {{ Form::text('comentario', $despacho->comentario, ['class' => 'form-control' . ($errors->has('comentario') ? ' is-invalid' : ''), 'placeholder' => 'Comentario']) }}
            {!! $errors->first('comentario', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('destino') }}
            {{ Form::text('destino', $despacho->destino, ['class' => 'form-control' . ($errors->has('destino') ? ' is-invalid' : ''), 'placeholder' => 'Destino']) }}
            {!! $errors->first('destino', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('motivodespacho') }}
            {{ Form::text('motivodespacho', $despacho->motivodespacho, ['class' => 'form-control' . ($errors->has('motivodespacho') ? ' is-invalid' : ''), 'placeholder' => 'Motivodespacho']) }}
            {!! $errors->first('motivodespacho', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>