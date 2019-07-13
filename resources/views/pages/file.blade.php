@extends('layouts.app')

@section('content')
    <div class = "jumbotron text-center">
        <h1>Welcome to Tutorfriend!</h1>
        <p> Search for tutors according to your needs!!</p>
        
        {!! Form::open(['action' => 'SearchController@filter', 'method' => 'GET']) !!}
        <div class="form-inline my-2 my-lg-0">
        {{Form::text('subject', '', ['class' => 'form-control', 'placeholder' => "Enter Subject to Search"])}}
        {{Form::submit('Search', ['class' => 'btn btn-primary'])}}
        </div>
        <div class="form-inline my-2 my-lg-0">
            {{Form::text('subject', '', ['class' => 'form-control', 'placeholder' => "Enter Subject"])}}
        </div>
        <div class="form-inline my-2 my-lg-0">
                {{Form::text('class', '', ['class' => 'form-control', 'placeholder' => "Enter your Grade"])}}
        </div>
        <div class="form-inline my-2 my-lg-0">
                {{Form::time('time', '', ['class' => 'form-control', 'placeholder' => "Enter Start and End time"])}}
        </div>
        <div class="form-inline my-2 my-lg-0">
                {{Form::text('time', '', ['class' => 'form-control', 'placeholder' => "Enter Hours"])}}
        </div>
        <div class="form-inline my-2 my-lg-0">
                {{Form::select('available_days', array('S'=> 'Sunday', 'M'=> 'Monday', 'T'=>'Tuesday', 'W'=>'Wednesday', 'A'=>'Thursday', 'F'=>'Friday', 'B'=>'Saturday'),'', ['class' => 'form-control', 'placeholder' => "Enter Available Days"])}}
        </div>
        <div class="form-inline my-2 my-lg-0">
                {{Form::text('location', '', ['class' => 'form-control', 'placeholder' => "Enter location"])}}
        </div>
        {{Form::submit('Advanced Search', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}

    </div>
@endsection
            