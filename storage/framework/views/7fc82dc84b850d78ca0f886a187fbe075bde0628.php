<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
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
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
        <div id="app">
        <?php echo $__env->make('inc.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class = container>
        <?php echo $__env->make('inc.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        

<div class="container">

        <?php echo Form::open(['action' => 'SearchController@advancesearch', 'method' => 'POST']); ?>

        <div class="form-group">
            <?php echo e(Form::label('subject', 'Subject')); ?>

            <?php echo e(Form::text('subject', '', ['class' => 'form-control', 'placeholder' => "Enter Subject"])); ?>

        </div>
        <div class="form-group">
                <?php echo e(Form::label('class', 'Grade')); ?>

                <?php echo e(Form::text('class', '', ['class' => 'form-control', 'placeholder' => "Enter your Grade"])); ?>

        </div>
        <div class="form-group">
                <?php echo e(Form::label('time', 'Time')); ?>

                <?php echo e(Form::time('time', '', ['class' => 'form-control', 'placeholder' => "Enter Start and End time"])); ?>

        </div>
        <div class="form-group">
                    <?php echo e(Form::label('hour', 'Hour')); ?>

                    <?php echo e(Form::number('hour', '', ['class' => 'form-control', 'placeholder' => "Enter hour"])); ?>

            </div>
        <div class="form-group">
                <?php echo e(Form::label('available_days', 'Available days')); ?>

                <?php echo e(Form::select('available_days', array('Sunday'=> 'Sunday', 'Monday'=> 'Monday', 'Tuesday'=>'Tuesday', 'Wednesday'=>'Wednesday', 'Thursday'=>'Thursday', 'Friday'=>'Friday', 'Saturday'=>'Saturday'),'', ['class' => 'form-control', 'placeholder' => "Enter Available Days"])); ?>

        </div>
        <div class="form-group">
                <?php echo e(Form::label('location', 'Location')); ?>

                <?php echo e(Form::text('location', '', ['class' => 'form-control', 'placeholder' => "Enter location"])); ?>

        </div>
        <?php echo e(Form::submit('Advance Search', ['class' => 'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

</div>
        </div>
        </div>
</body>
</html>

