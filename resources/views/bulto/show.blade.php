@extends('layouts.app')

@section('template_title')
    {{ $bulto->name ?? 'Show Bulto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Bulto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('bultos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigobulto:</strong>
                            {{ $bulto->codigobulto }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $bulto->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $bulto->fecha }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
