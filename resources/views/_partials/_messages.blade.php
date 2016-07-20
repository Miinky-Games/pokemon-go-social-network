@if (Session::has('success'))
	<div class="alert alert-success" role="alert" id="message">
		<strong>Success:</strong> {{ Session::get('success') }}
	</div>
@endif

@if (Session::has('failure'))
	<div class="alert alert-danger" role="alert" id="message">
		<strong>Failure:</strong> {{ Session::get('failure') }}
	</div>
@endif

@if (count($errors) > 0)
	<div class="alert alert-danger" role="alert">
		<strong>Errors:</strong>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif