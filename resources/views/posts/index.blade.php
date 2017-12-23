@extends('layouts.app')

@section('content')

	<h3>SEEDS POSTS LIST</h3>

	<!-- post title and date show -->
	@if(count($posts) >0 )
		@foreach($posts as $post)
			<div class="list-group-item">
				<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
				<small> Written On {{$post->created_at}} By {{$post->user->name}}</small>
			</div>
		@endforeach

		<!-- paginate links -->
		{{$posts->links()}}


	@else
		<p>No posts are found</p>
	@endif

@endsection
