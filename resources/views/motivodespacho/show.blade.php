@extends('layouts.app')

@section('template_title')
    {{ $motivodespacho->name ?? 'Show Motivodespacho' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Motivodespacho</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('motivodespachos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $motivodespacho->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
