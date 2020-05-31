<?php if(Session::has('error_message')): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo e(Session::get('error_message')); ?>

    </div>
<?php endif; ?>
<?php /**PATH C:\Users\Anesu\OneDrive\UTS\Semester 1\Software Studio\E-Healthcare\SES_1A_Group_2_E-Healthcare\resources\views/messenger/partials/flash.blade.php ENDPATH**/ ?>