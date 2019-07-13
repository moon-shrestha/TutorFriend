@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                    
                        <h3>My Profile</h3>
                        <table class="table table-striped">
                            <tr>
                                <td>About Me</td>
                                <td>Qualification</td>
                            </tr>
                            <tr>
                            <td>{{$user->about}}</td>
                            <td>{{$user->qualification}}</td>
                            
                        </table>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                
                

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <h3>My Posts</h3>
                    @if(count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                            <td>Posted Subjects</td>
                            <td>Grade</td>
                            <td>Available Time</td>
                            <td>Hour</td>
                            <td>Available days</td>
                            <td>Location</td>
                            <td></td>
                            <td></td>
                        </tr>
                        @foreach ($posts as $post)
                        <tr>
                        <td>{{$post->subject}}</td>
                        <td>{{$post->class}}</td>
                        <td>{{$post->time}}</td>
                        <td>{{$post->hour}}</td>
                        <td>{{$post->available_days}}</td>
                        <td>{{$post->location}}</td>

                        <td><a href="/posts/{{$post->id}}/edit" class = "btn btn-default">Edit</a></td>
                        <td>{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
                        </td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                    <p>You have no posts!</p>
                    @endif
                </div>
        
        </div>
    </div>
</div>
@endsection
