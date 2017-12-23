@extends('layouts.app')

@section('content')
	<a href="/posts" class="btn btn-default">Go Back</a>

	<!--post title and date show -->
	<h1>{{$post->title}}</h1>
	<small> written on {{$post->created_at}} By {{$post->user->name}}</small>
	
	<!-- post body show -->
	<div class="list-group-item">
		<h4>{!!$post->body!!}</h4>
	</div>
	<hr>
	<!-- Edit button -->
	@if(!auth::guest())
		@if(auth::user()->id == $post->user_id)
	<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

	<!-- Delete button -->
	{!!Form::open(['action' => ['PostsController@destroy', $post->id],'method' => 'POST', 'class' => 'pull-right'])!!}

	{{Form::hidden('_method', 'DELETE')}}
	{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

	{!!Form::close()!!}
		@endif
	@endif
	
@endsection