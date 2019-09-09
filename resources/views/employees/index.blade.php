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
				<a href="{{ route('Employee.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Nuevo Empleado</a>
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
					  	@if($employees->isEmpty())
							<tr>
								<td colspan="3" class="text-center">
									<h4>Sin empleados</h4>
								</td>
							</tr>
					  	@endif
					  	@foreach($employees as $employee)
							<tr>
						    	<td class="text-center pt-4">{{ $employee->name }}</td>
						    	<td class="text-center pt-4">{{ $employee->age }}</td>
						    	@if($user->id == $employee->user_id)
							    	<td class="text-center">
							    	<form action="{{ route('Employee.destroy', $employee->slug) }}" method="POST" class="form-inline-block">
							    		<a href="{{ route('Employee.edit', $employee->slug) }}" class="btn btn-warning"><i class="fas fa-edit"></i> Editar</a>
							    		@csrf
							    		@method('delete')
							    		<button onclick="deleteEmployee(event)" type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</button>
							    	</form>
							    	<button class="btn btn-success mt-2" data-toggle="modal" data-target="#historyJobs-{{ $employee->slug }}"><i class="fas fa-history"></i> Historial del empleado</button>
							    	@include('partials.modal')
							    	</td>
							    @else
							    	<td class="text-center">
							    		<button class="btn btn-success mt-2" data-toggle="modal" data-target="#historyJobs-{{ $employee->slug }}"><i class="fas fa-history"></i> Historial del empleado</button>
							    		@include('partials.modal')
							    	</td>
						    	@endif
						    </tr>
					    @endforeach
				  </tbody>
				</table>
			</div>
		</div>
	</div>
	<script>
	    function deleteEmployee(e) {
	      if (!confirm("Eliminar Empleado?")){
	        e.preventDefault();
	      }
	    }
	</script>
@endsection