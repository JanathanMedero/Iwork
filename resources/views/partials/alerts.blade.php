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

@if ($message = Session::get('danger'))
	<div class="col-md-12">
	    <div class="alert alert-danger alert-dismissible fade show" role="alert">
	    <strong>Error!</strong> {{ $message }}
	        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
	            <span aria-hidden="true">×</span>
	        </button>
	    </div>
	</div>
@endif

@if ($message = Session::get('update'))
	<div class="col-md-12">
	    <div class="alert alert-info alert-dismissible fade show" role="alert">
	    <strong>Todo Listo!</strong> {{ $message }}
	        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
	            <span aria-hidden="true">×</span>
	        </button>
	    </div>
	</div>
@endif