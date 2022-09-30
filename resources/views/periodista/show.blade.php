@extends('layouts.app')

@section('template_title')
    {{ $periodista->name ?? 'Show Periodista' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Periodista</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('periodistas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $periodista->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $periodista->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $periodista->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Especialidad:</strong>
                            {{ $periodista->especialidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
