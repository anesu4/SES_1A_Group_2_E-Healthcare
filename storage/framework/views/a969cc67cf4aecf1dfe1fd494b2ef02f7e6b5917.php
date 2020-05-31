

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('messenger.partials.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->renderEach('messenger.partials.thread', $threads, 'thread', 'messenger.partials.no-threads'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Anesu\OneDrive\UTS\Semester 1\Software Studio\E-Healthcare\SES_1A_Group_2_E-Healthcare\resources\views/messenger/index.blade.php ENDPATH**/ ?>