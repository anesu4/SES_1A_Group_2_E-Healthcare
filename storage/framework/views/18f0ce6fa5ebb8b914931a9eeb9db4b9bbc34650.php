<?php $class = $thread ?> //->isUnread(Auth::id()) ? 'alert-info' : '';

<div class="media alert <?php echo e($class); ?>">
    <h4 class="media-heading">
        <a href="<?php echo e(route('messages.show', $thread->id)); ?>"><?php echo e($thread->subject); ?></a>
        
    <p>
        
    </p>
    <p>
        <small><strong>Creator:</strong> </small>
    </p>
    <p>
        <small><strong>Participants:</strong> </small>
    </p>
</div>
<?php /**PATH C:\Users\Anesu\OneDrive\UTS\Semester 1\Software Studio\E-Healthcare\SES_1A_Group_2_E-Healthcare\resources\views/messenger/partials/thread.blade.php ENDPATH**/ ?>