@extends('layouts.app')

@section('title')
	<title>Editar empleado {{ $employee->name }}</title>
@endsection

@section('content')
<div class="container">
	@if($errors->any())
		@include('partials.errors')
	@endif
	<div class="row justify-content-center">
    	<div class="col-md-8 my-2">
    		<h3>Editar datos del empleado</h3>
    	</div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ingresa los datos del empleado</div>
                <div class="card-body">
					<form method="POST" action="{{ route('Employee.update', $employee->slug) }}">
						@method('PUT')
						@csrf
					 	<div class="row">
					 		<div class="col-md-6">
					 			<div class="form-group">
					    			<label for="name">Nombre del empleado</label>
					    			<input type="text" class="form-control" name="name" id="name" placeholder="Ingrese el nombre" value="{{ $employee->name }}">
					  			</div>
					 		</div>
					 		<div class="col-md-6">
					 			<div class="form-group">
									<label for="age">Edad del empleado</label>
								    <input type="number" class="form-control" name="age" id="age" placeholder="Ingrese la edad" value="{{ $employee->age }}">
								</div>
					 		</div>
					 	</div>
					  <button type="submit" class="btn btn-success">Guardar</button>
					</form>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
    	<div class="col-md-8 mt-4">
    		<div class="row">
    			<div class="col-md-6 d-flex align-items-center">
    				<h3 class="mb-0">Editar Puestos</h3>
    			</div>
    			<div class="col-md-6 d-flex justify-content-end">
    				<a href="{{ route('Job.create', $employee->slug) }}" class="btn btn-primary">Nuevo Puesto</a>
    			</div>
    		</div>
    	</div>
    </div>
    <div class="row justify-content-center">
    	<div class="col-md-8">
    		<hr>
    	</div>
    </div>
	@foreach($employee->Jobs as $employee)
	    <div class="row justify-content-center mb-4">
	        <div class="col-md-8">
	            <div class="card">
	                <div class="card-header">Puesto: {{ $employee->job }}</div>
	                <div class="card-body">
						<form method="POST" action="{{ route('Employee.update.job', $employee->id) }}">
							@method('PUT')
							@csrf
						 	<div class="row">
						 		<div class="col-md-6">
						 			<div class="form-group">
						    			<label for="job">Puesto</label>
						    			<input type="text" class="form-control" name="job" id="job" placeholder="Ingrese el puesto del empleado" value="{{ $employee->job }}">
						  			</div>
						 		</div>
						 		<div class="col-md-6">
						 			<div class="form-group">
						    			<label for="salary">Salario del empleado</label>
						    			<input type="number" step="any" class="form-control" name="salary" id="salary" placeholder="Ingrese el salario del empleado (0.00)" value="{{ $employee->salary }}">
						  			</div>
					 			</div>
						 	</div>
						 	<div class="row">
						 		<div class="col-md-12">
						 			<div class="form-group">
						    			<label for="time">Tiempo en la compañia</label>
						    			<input type="text" class="form-control" name="time" id="time" placeholder="Ingrese el tiempo trabajado en la compañia (Ejemplo: 5 meses)" value="{{ $employee->time_in_the_company }}">
						  			</div>
						 		</div>
						 	</div>
						  <button type="submit" class="btn btn-success">Guardar</button>
						</form>
	                </div>
	            </div>
	        </div>
	    </div>
    @endforeach

</div>
@endsection