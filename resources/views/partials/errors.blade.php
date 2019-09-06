<div class="row justify-content-center">
	<div class="alert alert-danger col-md-8" role="alert">
		<ul class="mb-0">
			@foreach($errors->all() as $error)
				<li style="list-style: none;">{{ $error }}</li>
			@endforeach
		</ul>
	</div>
</div>