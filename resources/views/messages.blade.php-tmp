@extends('layouts/app')

@section('title')Message @endsection

@section('content')

	<h1>All message</h1>


	@foreach ($data as $el)
		<div class="alert alert-info">
			<h3>{{ $el->subject }}</h3>
			<p>{{ $el->email }}</p>
			<p><small>{{ $el->created_at }}</small></p>
			<a href="#"><button class="btn btn-warning">Details</button></a>
		</div>
	@endforeach

@endsection
