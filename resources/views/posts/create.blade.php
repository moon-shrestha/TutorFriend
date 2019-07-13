@extends('layouts.app')

@section('content')
<h1>Create Post</h1>
{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('subject', 'Subject')}}
        {{Form::text('subject', '', ['class' => 'form-control', 'placeholder' => "Enter Subject"])}}
    </div>
    <div class="form-group">
            {{Form::label('class', 'Grade')}}
            {{Form::text('class', '', ['class' => 'form-control', 'placeholder' => "Enter your Grade"])}}
    </div>
    <div class="form-group">
            {{Form::label('time', 'Time')}}
            {{Form::time('time', '', ['class' => 'form-control', 'placeholder' => "Enter Start and End time"])}}
    </div>
    <div class="form-group">
                {{Form::label('hour', 'Hour')}}
                {{Form::number('hour', '', ['class' => 'form-control', 'placeholder' => "Enter hour"])}}
        </div>
    <div class="form-group">
            {{Form::label('available_days', 'Available days')}}
            {{Form::select('available_days', array('Sunday'=> 'Sunday', 'Monday'=> 'Monday', 'Tuesday'=>'Tuesday', 'Wednesday'=>'Wednesday', 'Thursday'=>'Thursday', 'Friday'=>'Friday', 'Saturday'=>'Saturday'),'', ['class' => 'form-control', 'placeholder' => "Enter Available Days"])}}
    </div>
    <div class="form-group">
            {{Form::label('location', 'Location')}}
            {{Form::text('location', '', ['class' => 'form-control', 'placeholder' => "Enter location"])}}
    </div>
    {{Form::submit('Create', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}

    
@endsection