<?php echo $__env->make('layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<!DOCTYPE html>
<body>
    <head>
        <!-- PLUGINS CSS STYLE -->
        <link href="<?php echo e(asset('assets/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" />
        <link href="<?php echo e(asset('assets/plugins/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" />
        <link href="<?php echo e(asset('assets/plugins/listtyicons/style.min.css')); ?>" rel="stylesheet" />
        <link href="<?php echo e(asset('assets/plugins/selectbox/select_option1.min.css')); ?>" rel="stylesheet" />

        <!-- Login and Registration Form Title and CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/style.css')); ?>">
        <title>Account</title>
        <link rel="stylesheet" href="assets/style.css">
    </head>
    <div class="content">
        <div class="hero-image"></div>
        <div class="user-home">
            <div class="navbar">
                <a href="patient-home.html">Home</a>
                <a href="">Appointments</a>
                <a href="">Messaging</a>
                <div class="dropdown">
                    <button class="drop-btn">Account <i class="fa fa-caret-down"></i></button>
                    <div class="dropdown-content">
                        <a href="">Patient Forms</a>
                        <a href="">Settings</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="user-name">
                    <h3>Patient Form</h3></div>
                <div class="column">
                    <div class="container">
                        <form action="">
                        </form>
                    </div>
                </div>
                <div class="column">
                    <div class="container">

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>

</script>

<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Anesu\OneDrive\UTS\Semester 1\Software Studio\E-Healthcare\SES_1A_Group_2_E-Healthcare\resources\views/doctor.blade.php ENDPATH**/ ?>