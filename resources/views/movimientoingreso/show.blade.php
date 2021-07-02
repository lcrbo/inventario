@extends('layouts.app')

@section('template_title')
    {{ $movimientoingreso->name ?? 'Show Movimientoingreso' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Movimientoingreso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('movimientoingresos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Producto Id:</strong>
                            {{ $movimientoingreso->producto_id }}
                        </div>
                        <div class="form-group">
                            <strong>Tipodocumento Id:</strong>
                            {{ $movimientoingreso->tipodocumento_id }}
                        </div>
                        <div class="form-group">
                            <strong>Numerodocumento:</strong>
                            {{ $movimientoingreso->numerodocumento }}
                        </div>
                        <div class="form-group">
                            <strong>Ordencompra:</strong>
                            {{ $movimientoingreso->ordencompra }}
                        </div>
                        <div class="form-group">
                            <strong>Nuevo:</strong>
                            {{ $movimientoingreso->nuevo }}
                        </div>
                        <div class="form-group">
                            <strong>Serie:</strong>
                            {{ $movimientoingreso->serie }}
                        </div>
                        <div class="form-group">
                            <strong>Codigoactivo:</strong>
                            {{ $movimientoingreso->codigoactivo }}
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $movimientoingreso->stock }}
                        </div>
                        <div class="form-group">
                            <strong>Ubicacion Id:</strong>
                            {{ $movimientoingreso->ubicacion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Stock Id:</strong>
                            {{ $movimientoingreso->estado_stock_id }}
                        </div>
                        <div class="form-group">
                            <strong>Observacion:</strong>
                            {{ $movimientoingreso->observacion }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $movimientoingreso->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
