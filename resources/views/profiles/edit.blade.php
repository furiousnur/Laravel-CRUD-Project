@extends('layouts.app')

@section('content')

	<h1>Edit Posts</h1>
	{!! Form::open(['action' => ['ProController@update', $post->id], 'method' => 'POST']) !!}

	<form class="form-group" action="store" method="post" enctype="multipart/form-data">
		<!-- <label for="image">image</label> -->
		<label for="image">image</label>
		<input type="file" name="image" value="{{ $post->image }}"><br/>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<!-- <input type="submit" name="submit" value="Submit"> -->
	</form>
	<!-- for name -->
    <div class="form-group">
       {{Form::label('name', 'Name')}}
       {{Form::text('name', $post->name, ['class' => 'form-control', 'placeholder'=>'name'])}}
    </div>
    <div class="form-group">
       {{Form::label('position', 'Position')}}
       {{Form::text('position', $post->position, ['class' => 'form-control', 'placeholder'=>'position'])}}
    </div>

     <div class="form-group">
       {{Form::label('dept', 'Dept')}}
       {{Form::text('dept', $post->dept, ['class' => 'form-control', 'placeholder'=>'dept'])}}
    </div>

    <div class="form-group">
       {{Form::label('location', 'Location')}}
       {{Form::text('location', $post->location, ['class' => 'form-control', 'placeholder'=>'location'])}}
    </div>

    <!-- for post -->
    <div class="form-group">
       {{Form::label('interest', 'Interest')}}
       {{Form::textarea('interest', $post->interest, [ 'class' => 'form-control', 'placeholder'=>'interest'])}}
    </div>

		<!-- Update -->
		{{Form::hidden('_method', 'PUT')}}
		<!-- Submit button -->
		{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

	{!! Form::close() !!}

@endsection
