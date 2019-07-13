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
</head>
<body>
    <div id="app">
        <?php echo $__env->make('inc.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class = container>
            <?php echo $__env->make('inc.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">
                                <div class="panel-heading">Register</div>
                
                                <div class="panel-body">
                                    <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
                                        <?php echo e(csrf_field()); ?>

                
                                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                            <label for="name" class="col-md-4 control-label">Name</label>
                
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
                
                                                <?php if($errors->has('name')): ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group<?php echo e($errors->has('qualification') ? ' has-error' : ''); ?>">
                                                <label for="qualification" class="col-md-4 control-label">Qualification</label>
                    
                                                <div class="col-md-6">
                                                    <textarea rows="4" cols="30" id="qualification" type="text" class="form-control" name="qualification" value="<?php echo e(old('qualification')); ?>" required autofocus></textarea>
                    
                                                    <?php if($errors->has('qualification')): ?>
                                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('qualification')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                        </div>
                                        <div class="form-group<?php echo e($errors->has('about') ? ' has-error' : ''); ?>">
                                                <label for="about" class="col-md-4 control-label">About Me</label>
                    
                                                <div class="col-md-6">
                                                    <textarea rows="4" cols="30" id="about" type="text" class="form-control" name="about" value="<?php echo e(old('about')); ?>" required autofocus></textarea>
                    
                                                    <?php if($errors->has('about')): ?>
                                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('about')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                
                
                                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                
                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>
                
                                                <?php if($errors->has('email')): ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                
                                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                            <label for="password" class="col-md-4 control-label">Password</label>
                
                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control" name="password" required>
                
                                                <?php if($errors->has('password')): ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                
                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <button type="submit" class="btn btn-primary">
                                                    Register
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    
                    
            </div>
    </div>
        



</body>
</html>


