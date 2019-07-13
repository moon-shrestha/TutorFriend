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
        

<div class="container">

        {!! Form::open(['action' => 'SearchController@advancesearch', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('subject', 'Subject')}}
            {{Form::text('subject', '', ['class' => 'form-control', 'placeholder' => "Enter Subject"])}}
        </div>
        <div class="form-group">
                {{Form::label('class', 'Level')}}
                {{Form::text('class', '', ['class' => 'form-control', 'placeholder' => "Enter your Level"])}}
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
        {{Form::submit('Advance Search', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
        </div>
        </div>
</body>
</html>

