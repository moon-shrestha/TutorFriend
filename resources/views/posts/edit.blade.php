@extends('layouts.app')

@section('content')
<h1>Edit Post</h1>
{!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('subject', 'Subject')}}
        {{Form::text('subject', $post->subject, ['class' => 'form-control', 'placeholder' => "Enter Subject"])}}
    </div>
    <div class="form-group">
            {{Form::label('class', 'Grade')}}
            {{Form::text('class', $post->class, ['class' => 'form-control', 'placeholder' => "Enter your Grade"])}}
    </div>
    <div class="form-group">
            {{Form::label('time', 'Time')}}
            {{Form::text('time', $post->time, ['class' => 'form-control', 'placeholder' => "Enter Start and End time"])}}
    </div>
    <div class="form-group">
            {{Form::label('available_days', 'Available days')}}
            {{Form::text('available_days', $post->available_days, ['class' => 'form-control', 'placeholder' => "Enter Available Days"])}}
    </div>
    <div class="form-group">
            {{Form::label('location', 'Location')}}
            {{Form::text('location', $post->location, ['class' => 'form-control', 'placeholder' => "Enter location"])}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Update Post', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

    
@endsection