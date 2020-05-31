<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <!-- PLUGINS CSS STYLE -->
        <link href="<?php echo e(asset('assets/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" />
        <link href="<?php echo e(asset('assets/plugins/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" />
        <link href="<?php echo e(asset('assets/plugins/listtyicons/style.min.css')); ?>" rel="stylesheet" />
		<link href="<?php echo e(asset('assets/plugins/selectbox/select_option1.min.css')); ?>" rel="stylesheet" />

        <!-- Login and Registration Form Title and CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/style.css')); ?>">
        <link rel="stylesheet" href="assets/style.css">
    </head>
    <body>
        <div class="footer-layer">
            <p>
                Footer Info Here:
            </p>
        </div>
    </body>
</html>
<?php echo $__env->make("layouts.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\Git Repo\SES_1A_Group_2_E-Healthcare\resources\views/layouts/footer.blade.php ENDPATH**/ ?>