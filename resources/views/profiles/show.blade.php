@extends('layouts.app')

@section('content')
	<a href="/profiles" class="btn btn-default">Go Back</a>
	<hr>
<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading">SEEDS ACADEMIC STAFF</div>
			<div class="panel-body">
					<div class="col-sm-4 margin-img">
								<img src="{{ asset('images/{$post->file}') }}" alt="">

					</div>

					<div class="col-sm-8">

	<!--post title and date show -->
	<!-- <h1>{{$post->name}}</h1>
	<small> written on {{$post->created_at}} By {{$post->user->name}}</small> -->

	<!-- post body show -->
	<div class="list-group-item">
		<h4><i class="fa fa-user"></i> {!!$post->name!!}</h4>
		<h4><i class="fa fa-calendar"></i> {!!$post->position!!}</h4>
		<h4><i class="fa fa-clipboard"></i> {!!$post->dept!!}</h4>
		<h4><i class="fa fa-address-book"></i> {!!$post->location!!}</h4>
		<h4><i class="fa fa-bullhorn"></i> <strong>Research Interest:</strong> {!!$post->interest!!}</h4>
	</div>

	<hr>
	<!-- Edit button -->
	@if(!auth::guest())
		@if(auth::user()->id == $post->user_id)
	<a href="/profiles/{{$post->id}}/edit" class="btn btn-default">Edit</a>

	<!-- Delete button -->
	{!!Form::open(['action' => ['ProController@destroy', $post->id],'method' => 'POST', 'class' => 'pull-right'])!!}

	{{Form::hidden('_method', 'DELETE')}}
	{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

	{!!Form::close()!!}
		@endif
	@endif
			</div>
		</div>
	</div>
</div>


@endsection
