@extends('layouts.app')

@section('content')

	<h1>Edit Posts</h1>
	{!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}

	<!-- for title -->
		<div class="form-group">
		   {{Form::label('title', 'Title')}}
		   {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder'=>'title'])}}
		</div>

		<!-- for post -->
		<div class="form-group">
		   {{Form::label('body', 'Body')}}
		   {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder'=>'Body Text'])}}
		</div>

		<!-- Update -->
		{{Form::hidden('_method', 'PUT')}}
		<!-- Submit button -->
		{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    
	{!! Form::close() !!}

@endsection