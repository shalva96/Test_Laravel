@extends('layouts/app')

@section('title')Update message @endsection

@section('content')

	<h1>Update message</h1>

	<form action="{{ route('contact-updata-submit', $data->id) }}" method="post">
		@csrf

		<div class="form-group">
			<label for="name">Enter name</label>
			<input type="text" name="name" value="{{$data->name}}" placeholder="Enter name" id="name" class="form-control">
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="text" name="email" value="{{$data->email}}" placeholder="Email" id="email" class="form-control">
		</div>
		<div class="form-group">
			<label for="subject">Subject</label>
			<input type="text" name="subject" value="{{$data->subject}}" placeholder="Subject" id="subject" class="form-control">
		</div>
		<div class="form-group">
			<label for="messege">Messege</label>
			<textarea name="messege"  id="messege" class="form-control" placeholder="Messege">{{$data->messege}}</textarea>
		</div>

		<button type="submit" class="btn btn-success">Update</button>

	</form>

@endsection
