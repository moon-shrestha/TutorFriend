<?php $__env->startSection('content'); ?>
<h1>Create Post</h1>
<?php echo Form::open(['action' => 'PostsController@store', 'method' => 'POST']); ?>

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
    <?php echo e(Form::submit('Create', ['class' => 'btn btn-primary'])); ?>

<?php echo Form::close(); ?>


    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>