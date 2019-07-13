<?php $__env->startSection('content'); ?>
<div class="container">
<form action="" method="POST">
        <?php echo e(csrf_field()); ?>

    Name<input type="text">
    Emaill<input type="email">
    Message:<textarea rows="4" cols="50"></textarea>
    <input type="submit" value="Submit">
</form>
</div>

    
<?php $__env->stopSection(); ?>


 

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>