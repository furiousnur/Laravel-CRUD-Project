@extends('layouts.app')

@section('content')

	<h1>Create Posts</h1>
	{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}

	<!-- for title -->
		<div class="form-group">
		   {{Form::label('title', 'Title')}}
		   {{Form::text('title', '', ['class' => 'form-control', 'placeholder'=>'title'])}}
		</div>

		<!-- for post -->
		<div class="form-group">
		   {{Form::label('body', 'Body')}}
		   {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder'=>'Body Text'])}}
		</div>

		<!-- Submit button -->
		{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    
	{!! Form::close() !!}

@endsection