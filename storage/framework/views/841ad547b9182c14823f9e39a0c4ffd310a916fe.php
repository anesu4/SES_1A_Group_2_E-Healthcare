

<?php $__env->startSection('content'); ?>
    <div class="col-md-6">
        <h1><?php echo e($thread->subject); ?></h1>
        <?php echo $__env->renderEach('messenger.partials.messages', $thread->messages, 'message'); ?>

        <?php echo $__env->make('messenger.partials.form-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Anesu\OneDrive\UTS\Semester 1\Software Studio\E-Healthcare\SES_1A_Group_2_E-Healthcare\resources\views/messenger/show.blade.php ENDPATH**/ ?>