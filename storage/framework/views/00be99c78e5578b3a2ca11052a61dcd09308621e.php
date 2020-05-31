<?php $count = Auth::user()->id; ?>
<?php if($count > 0): ?>
    <span class="label label-danger"><?php echo e($count); ?></span>
<?php endif; ?>
<?php /**PATH C:\Users\Anesu\OneDrive\UTS\Semester 1\Software Studio\E-Healthcare\SES_1A_Group_2_E-Healthcare\resources\views/messenger/unread-count.blade.php ENDPATH**/ ?>