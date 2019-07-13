<?php $__env->startSection('content'); ?>

<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                    
                        <h3>My Profile</h3>
                        <table class="table table-striped">
                            <tr>
                                <td>About Me</td>
                                <td>Qualification</td>
                            </tr>
                            <tr>
                            <td><?php echo e($user->about); ?></td>
                            <td><?php echo e($user->qualification); ?></td>
                            
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
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <h3>My Posts</h3>
                    <?php if(count($posts) > 0): ?>
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
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                        <td><?php echo e($post->subject); ?></td>
                        <td><?php echo e($post->class); ?></td>
                        <td><?php echo e($post->time); ?></td>
                        <td><?php echo e($post->hour); ?></td>
                        <td><?php echo e($post->available_days); ?></td>
                        <td><?php echo e($post->location); ?></td>

                        <td><a href="/posts/<?php echo e($post->id); ?>/edit" class = "btn btn-default">Edit</a></td>
                        <td><?php echo Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']); ?>

                            <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                            <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

                            <?php echo Form::close(); ?>

                        </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                    <?php else: ?>
                    <p>You have no posts!</p>
                    <?php endif; ?>
                </div>
        
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>