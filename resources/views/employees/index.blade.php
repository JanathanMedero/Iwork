@extends('layouts.app')

@section('title')
	<title>Todos los empleados</title>
@endsection

@section('content')
	<div class="container">
		@include('partials.alerts')
		<p>Todos los empleados</p>
	</div>
@endsection