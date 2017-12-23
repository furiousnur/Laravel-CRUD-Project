@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">WelCome {{ Auth::user()->name }}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="panel-body">
                       <h3>Create Your Profile</h3>
                       <hr>
                       <a href="/profiles/create" class="btn btn-default">Create Your Profile</a>
                       <hr>
                       <!-- @if(count($posts) > 0) -->
                           <!-- Table -->
                           <!-- <table class="table table-striped">
                                <tr>
                                    <th>name</th>
                                    <th></th>
                                    <th></th>
                                </tr> -->
                                <!-- @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->name }}</td> -->
                                    <!-- <td><a href="/profiles/{{$post->id}}/edit" class="btn btn-default">Edit</a></td> -->
                                    <!-- <td>

                                        {!!Form::open(['action' => ['ProController@destroy', $post->id],'method' => 'POST', 'class' => 'pull-right'])!!}

                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

                                        {!!Form::close()!!}
                                    </td> -->
                                <!-- </tr>
                                @endforeach
                           </table>
                           @else
                           <h4>You have no Posts</h4>
                        @endif -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
