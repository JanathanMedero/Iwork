@extends('layouts.app')

@section('title')
	<title>Nuevo empleado</title>
@endsection

@section('content')
<div class="container">
	@if($errors->any())
		@include('partials.errors')
	@endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ingresa los datos del empleado</div>
                <div class="card-body">
					<form method="POST" action="{{ route('Employee.store') }}">
						@csrf
					 	<div class="row">
					 		<div class="col-md-6">
					 			<div class="form-group">
					    			<label for="name">Nombre del empleado</label>
					    			<input type="text" class="form-control" name="name" id="name" placeholder="Ingrese el nombre" value="{{ old('name') }}">
					  			</div>
					 		</div>
					 		<div class="col-md-6">
					 			<div class="form-group">
									<label for="age">Edad del empleado</label>
								    <input type="number" class="form-control" name="age" id="age" placeholder="Ingrese la edad" value="{{ old('age') }}">
								</div>
					 		</div>
					 	</div>
					 	<div class="row">
					 		<div class="col-md-6">
					 			<div class="form-group">
					    			<label for="job">Puesto del empleado</label>
					    			<input type="text" class="form-control" name="job" id="job" placeholder="Ingrese el puesto del empleado" value="{{ old('job') }}">
					  			</div>
					 		</div>
					 		<div class="col-md-6">
					 			<div class="form-group">
					    			<label for="salary">Salario del empleado</label>
					    			<input type="number" step="any" class="form-control" name="salary" id="salary" placeholder="Ingrese el salario del empleado (0.00)" value="{{ old('salary') }}">
					  			</div>
					 		</div>
					 	</div>
					 	<div class="row">
					 		<div class="col-md-12">
					 			<div class="form-group">
					    			<label for="time">Tiempo en la compañia</label>
					    			<input type="text" class="form-control" name="time" id="time" placeholder="Ingrese el tiempo trabajado en la compañia (Ejemplo: 5 meses)" value="{{ old('time') }}">
					  			</div>
					 		</div>
					 	</div>
					  <button type="submit" class="btn btn-success"><i class="fas fa-plus"></i> Crear empleado</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection