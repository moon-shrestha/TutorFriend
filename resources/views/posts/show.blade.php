<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
    @include('inc.navbar')
        <div class = container>
            @include('inc.messages')
            <a href="/posts" class="btn btn-default">Go Back</a>
<h1>{{$post->subject}}</h1>
    
    
    <hr>
    <div>
    <small>Updated on {{$post->created_at}}</small>
    <hr>
    
    <table class="table">
            <thead>
            <tr>
                <th>Post By</th>
                <th>About me</th>
                <th>Qualification</th>
                
            </tr>
            </thead>
            <tbody>
                <tr>
                <td>{{$post->user['name']}}</td>
                <td>{{$post->user['about']}}</td>
                <td>{{$post->user['qualification']}}</td>
                </tr>
        
            </tbody>

        </table>

    

        
        <table class="table">
            <tr>
                <th>Subject</th>
                <th>Grade</th>
                <th>Time</th>
                <th>Hours</th>
                <th>Available Days</th>
                <th>Address</th>
            </tr>
           
            <tr>
                    <td>{{$post->subject}}</td>
                    <td>{{$post->class}}</td>
                    <td>{{$post->time}}</td>
                    <td>{{$post->hour}}</td>
                    <td>{{$post->available_days}}</td>
                    <td>{{$post->location}}</td>
                </tr>
                
    
        </table>
    
    
    <hr>
    @if(!Auth::user())
    <div class="jumbotron text-center">
            <form action="/sendbasicemail" method="post">
                    {{ csrf_field() }}
                <div class="form-group"><input type="text" name="name" placeholder="Enter your Name" class="form-control"></div>
                <div class="form-group"><input type="email" name="email" placeholder="Enter your email" class="form-control"></div>
                <div class="form-group"><textarea rows="4" cols="50" name="message" placeholder="Enter your message here" class="form-control"></textarea></div>
                <input type="hidden" value="{{$post->user['email']}}" name="teacher">
                <input type="hidden" value="{{$post->user['name']}}" name="teacherName">
                <input class="btn btn-primary" type="submit" value="Connect">
            </form>
    </div>
    @endif
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href = "/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
    </div>
    </div>
        


</body>
</html>
