@extends('layouts/app')

@section('title')Cocntact @endsection

@section('content')

	<h1>cocntact</h1>

	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<form action="{{ route('contact-form') }}" method="post">
		@csrf

		<div class="form-group">
			<label for="name">Enter name</label>
			<input type="text" name="name" placeholder="Enter name" id="name" class="form-control">
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="text" name="email" placeholder="Email" id="email" class="form-control">
		</div>
		<div class="form-group">
			<label for="subject">Subject</label>
			<input type="text" name="subject" placeholder="Subject" id="subject" class="form-control">
		</div>
		<div class="form-group">
			<label for="messege">Messege</label>
			<textarea name="messege" id="messege" class="form-control" placeholder="Messege"></textarea>
		</div>

		<button type="submit" class="btn btn-success">Send</button>

	</form>

@endsection
