@extends('layouts.app')

@section('content')

	<h3>SEEDS Profile LIST</h3>

	<!-- post title and date show -->
	@if(count($profiles) >0 )
		@foreach($profiles as $post)
			<div class="list-group-item">
				<h3><a href="/profiles/{{$post->id}}">{{$post->name}}</a></h3>
				<small> Written On {{$post->created_at}} By {{$post->user->name}}</small>
			</div>
		@endforeach

		<!-- paginate links -->
		{{$profiles->links()}}


	@else
		<p>No posts are found</p>
	@endif

@endsection
