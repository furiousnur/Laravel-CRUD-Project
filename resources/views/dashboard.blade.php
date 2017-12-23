@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">WelCome {{ Auth::user()->name }} </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="panel-body">
                       <h3>Create Your Post</h3>
                       <hr>
                       <a href="/posts/create" class="btn btn-default">Create Post</a>
                       <hr>
                       @if(count($posts) > 0)
                           <!-- Table -->
                           <table class="table table-striped">
                                <tr>
                                    <th>Title</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                                    <!-- <td>{{$post->title}}</td> -->
                                    <td>
                                        <!-- Delete button -->
                                        {!!Form::open(['action' => ['PostsController@destroy', $post->id],'method' => 'POST', 'class' => 'pull-right'])!!}

                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                                @endforeach
                           </table>
                           @else
                           <h4>You have no Posts</h4>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
