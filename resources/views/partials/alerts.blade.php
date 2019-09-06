@if ($message = Session::get('success'))
	<div class="col-md-12">
	    <div class="alert alert-success alert-dismissible fade show" role="alert">
	    <strong>Todo listo!</strong> {{ $message }}
	        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
	            <span aria-hidden="true">×</span>
	        </button>
	    </div>
	</div>
@endif