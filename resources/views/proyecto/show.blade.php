@extends('layouts.app')

@section('template_title')
    {{ $proyecto->name ?? 'Show Proyecto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Proyecto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proyectos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $proyecto->name }}
                        </div>
                        <div class="form-group">
                            <strong>Img:</strong>
                            {{ $proyecto->img }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $proyecto->description }}
                        </div>
                        <div class="form-group">
                            <strong>Url:</strong>
                            {{ $proyecto->url }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
