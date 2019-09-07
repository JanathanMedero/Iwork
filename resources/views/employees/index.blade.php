@extends('layouts.app')

@section('title')
	<title>Todos los empleados</title>
@endsection

@section('content')
	<div class="container">
		@include('partials.alerts')
		<div class="row">
			<div class="col-md-6 d-flex align-items-center">
				<p class="display-4 mb-0">Empleados</p>
			</div>	
			<div class="col-md-6 d-flex justify-content-end align-items-center">
				<a href="{{ route('Employee.create') }}" class="btn btn-primary">Nuevo Empleado</a>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-md-12">
				<table class="table table-hover">
				  <thead>
				    <tr>
				      <th scope="col" class="text-center">Nombre</th>
				      <th scope="col" class="text-center">Edad</th>
				      <th scope="col" class="text-center">Acciones</th>
				    </tr>
				  </thead>
				  <tbody>
				  	@foreach($employees as $employee)
						<tr>
					    	<td class="text-center">{{ $employee->name }}</td>
					    	<td class="text-center">{{ $employee->age }}</td>
					    	@if($user->id == $employee->user_id)
						    	<td class="text-center">
						    	<a href="{{ route('Employee.edit', $employee->slug) }}" class="btn btn-warning">Editar</a>
						      	<a href="#" class="btn btn-danger">Eliminar</a>
						      	<a href="#" class="btn btn-success">Historial del empleado</a>
						    	</td>
						    @else
						    	<td class="text-center">
						    		<a href="#" class="btn btn-success">Historial del empleado</a>
						    	</td>
					    	@endif
					    </tr>
				    @endforeach
				  </tbody>
				</table>
			</div>
		</div>
	</div>
@endsection