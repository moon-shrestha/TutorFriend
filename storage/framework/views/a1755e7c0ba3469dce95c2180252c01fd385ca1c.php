<?php $__env->startSection('content'); ?>
<h1>Make my profile</h1>

<div class="jumbotron text-center">
        <form action="profileupdate" method="POST" >
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                <textarea rows="5" cols="50" placeholder="Enter Qualification" ></textarea>
                </div>
                <div class="form-group">
                <textarea rows="5" cols="50" placeholder="About you"></textarea>
                </div>
                <div class= "text align:center">
                <input type="file" name="image" placeholder="Choose a file to upload">
                </div>
                <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                </div>
                        
                

        </form>
</div>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>