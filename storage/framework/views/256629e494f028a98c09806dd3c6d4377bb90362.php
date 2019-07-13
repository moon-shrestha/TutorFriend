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
            <a href="/posts" class="btn btn-default">Go Back</a>
<h1><?php echo e($post->subject); ?></h1>
    
    
    <hr>
    <div>
    <small>Updated on <?php echo e($post->created_at); ?></small>
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
                <td><?php echo e($post->user['name']); ?></td>
                <td><?php echo e($post->user['about']); ?></td>
                <td><?php echo e($post->user['qualification']); ?></td>
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
                    <td><?php echo e($post->subject); ?></td>
                    <td><?php echo e($post->class); ?></td>
                    <td><?php echo e($post->time); ?></td>
                    <td><?php echo e($post->hour); ?></td>
                    <td><?php echo e($post->available_days); ?></td>
                    <td><?php echo e($post->location); ?></td>
                </tr>
                
    
        </table>
    
    
    <hr>
    <?php if(!Auth::user()): ?>
    <div class="jumbotron text-center">
            <form action="/sendbasicemail" method="post">
                    <?php echo e(csrf_field()); ?>

                <div class="form-group"><input type="text" name="name" placeholder="Enter your Name" class="form-control"></div>
                <div class="form-group"><input type="email" name="email" placeholder="Enter your email" class="form-control"></div>
                <div class="form-group"><textarea rows="4" cols="50" name="message" placeholder="Enter your message here" class="form-control"></textarea></div>
                <input type="hidden" value="<?php echo e($post->user['email']); ?>" name="teacher">
                <input type="hidden" value="<?php echo e($post->user['name']); ?>" name="teacherName">
                <input class="btn btn-primary" type="submit" value="Connect">
            </form>
    </div>
    <?php endif; ?>
    <?php if(!Auth::guest()): ?>
        <?php if(Auth::user()->id == $post->user_id): ?>
            <a href = "/posts/<?php echo e($post->id); ?>/edit" class="btn btn-default">Edit</a>
            <?php echo Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']); ?>

            <?php echo e(Form::hidden('_method', 'DELETE')); ?>

            <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

            <?php echo Form::close(); ?>

        <?php endif; ?>
    <?php endif; ?>
    </div>
    </div>
        


</body>
</html>
