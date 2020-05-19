<?php echo $__env->make('layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!DOCTYPE html>
<head>
    <script type="text/javascript"async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABZr8y9YuOF9eQhxoC_P70V73zuJjFbkc&libraries=places&callback=initMap" ></script>
    <!-- PLUGINS CSS STYLE -->
    <link href="<?php echo e(asset('assets/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/plugins/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/plugins/listtyicons/style.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/plugins/selectbox/select_option1.min.css')); ?>" rel="stylesheet" />

    <!-- Login and Registration Form Title and CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/style.css')); ?>">
    <title>Account</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content login-page">
        <div class="user-home">
            <div class="row">
                <div class="user-name">
                    <h3>Enter your details</h3>
                </div>
                <div class="col-3 mx-atuo">
                    <div class="col-container">
                        <h3>Patient meetings</h3>
                        <div class="doctor-list">
                            <div class="doctor-obj">
                            <a href="" ><h6>Mr. Example Name</h6></a>
                            <p>Lorem ipsum dolor</div>
                            <div class="doctor-obj">
                            <a href="" ><h6>Mr. Example Name</h6></a>
                            <p>Lorem ipsum dolor</div>
                            <div class="doctor-obj">
                            <a href=""><h6>Mr. Example Name</h6></a>
                            <p>Lorem ipsum dolor</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>

</script>
<?php /**PATH C:\Users\Anesu\OneDrive\UTS\Semester 1\Software Studio\E-Healthcare\SES_1A_Group_2_E-Healthcare\resources\views/patient-form.blade.php ENDPATH**/ ?>