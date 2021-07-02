@extends('layouts.app')

@section('template_title')
    {{ $despacho->name ?? 'Show Despacho' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Despacho</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('despachos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $despacho->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fechadespacho:</strong>
                            {{ $despacho->fechadespacho }}
                        </div>
                        <div class="form-group">
                            <strong>Comentario:</strong>
                            {{ $despacho->comentario }}
                        </div>
                        <div class="form-group">
                            <strong>Destino:</strong>
                            {{ $despacho->destino }}
                        </div>
                        <div class="form-group">
                            <strong>Motivodespacho:</strong>
                            {{ $despacho->motivodespacho }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
