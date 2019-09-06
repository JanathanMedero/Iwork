@extends('layouts.app')

@section('title')
    <title>{{ Auth::user()->name }}</title>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Administrador de empleados</div>

                <div class="card-body">
                    <a class="btn btn-success" href="{{ route('Employee.create') }}" role="button">Nuevo Empleado</a>
                    <a class="btn btn-primary" href="{{ route('Employee.index') }}" role="button">Mostrar Empleados</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
