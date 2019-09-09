@extends('layouts.app')

@section('title')
    <title>{{ Auth::user()->name }}</title>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><strong>Administrador de empleados</strong></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <a class="btn btn-success" href="{{ route('Employee.create') }}" role="button"><i class="fas fa-user"></i> Nuevo Empleado</a>
                        </div>
                        <div class="col-md-6 text-center">
                            <a class="btn btn-primary" href="{{ route('Employee.index') }}" role="button"><i class="fas fa-users"></i> Mostrar Empleados</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
