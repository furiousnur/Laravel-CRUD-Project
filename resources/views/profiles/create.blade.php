@extends('layouts.app')

@section('content')

  <h1>Create Posts</h1>
  {!! Form::open(['action' => 'ProController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}


  <!-- for name -->
    <div class="form-group">
       {{Form::label('name', 'Name')}}
       {{Form::text('name', '', ['class' => 'form-control', 'placeholder'=>'name'])}}
    </div>
    <div class="form-group">
    <label for="image">image</label>
    <input type="file" name="image"><br/>
    </div>
    <div class="form-group">
       {{Form::label('position', 'Position')}}
       {{Form::text('position', '', ['class' => 'form-control', 'placeholder'=>'position'])}}
    </div>

     <div class="form-group">
       {{Form::label('dept', 'Dept')}}
       {{Form::text('dept', '', ['class' => 'form-control', 'placeholder'=>'dept'])}}
    </div>

    <div class="form-group">
       {{Form::label('location', 'Location')}}
       {{Form::text('location', '', ['class' => 'form-control', 'placeholder'=>'location'])}}
    </div>

    <!-- for post -->
    <div class="form-group">
       {{Form::label('interest', 'Interest')}}
       {{Form::textarea('interest', '', ['class' => 'form-control', 'placeholder'=>'interest'])}}
    </div>

    <!-- Submit button -->
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

  {!! Form::close() !!}

@endsection
