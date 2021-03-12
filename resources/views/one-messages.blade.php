@extends('layouts/app')

@section('title'){{$data->subject}} @endsection

@section('content')

	<h1>{{$data->subject}}</h1>
		<div class="alert alert-info">
			<p>{{ $data->message }}</p>
			<p>{{ $data->email }}</p>
			<p><small>{{ $data->created_at }}</small></p>
			<a href="{{ route('contact-updata', $data->id) }}"><button class="btn btn-primary">Edit</button></a>
			<a href="{{ route('contact-delete', $data->id) }}"><button class="btn btn-danger">Delete</button></a>
		</div>
@endsection