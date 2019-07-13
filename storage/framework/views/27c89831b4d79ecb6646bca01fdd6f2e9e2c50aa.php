<?php $__env->startSection('content'); ?>
<h1>Search Results</h1>
<?php if(count($posts)>0): ?>
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class ='well'>
<h3><a href="/posts/<?php echo e($post->id); ?>"><?php echo e($post->subject); ?></a></h3>
        <small>Updated on <?php echo e($post->created_at); ?> </small>
</div>
    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php else: ?> <p>No posts found!</p>
    
<?php endif; ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>