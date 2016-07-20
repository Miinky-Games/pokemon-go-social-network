@extends('layouts.main')

@if (Auth::check())

	@section('title', 'Pokemeet')

@else

	@section('title', 'Welcome to Pokemeet')

@endif

@section('content')

	<div class="row">

	@if (Auth::check())


	@else

		<div class="col-md-4 col-md-offset-4">
			<div class="well">
				
			</div>

		</div>


	@endif

	</div>

@endsection