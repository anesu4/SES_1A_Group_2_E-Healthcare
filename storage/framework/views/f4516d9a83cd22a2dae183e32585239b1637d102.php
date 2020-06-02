<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<body>
    <div class="content login-page">
        <div class="user-home">
            <div class="row">
                <div class="user-name">
                    <?php if(auth()->guard()->guest()): ?>
                    <?php if(Route::has('register')): ?>
                    <h4>Welcome <?php echo e(Auth::Doctors()->name); ?></h4>
                    <?php endif; ?>
                    <?php else: ?> <h3>Welcome <?php echo e(Auth::Doctors()->name); ?>!</h3>
                    <?php endif; ?>
                    <h3>View Messages</h3>
                </div>
                        <!-- <form action="">
                            <input type="text" class="maps-search" id="search" placeholder="Search"/>
                        </form> -->

                <div class="column">
                    <div class="col-container">
                        <h3>Added Doctors</h3>
                        <div class="doctor-list">
                            <div class="doctor-obj">
                            <a href="" ><h6>Dr. Example Name</h6></a>
                            <p>Lorem ipsum dolor</div>
                            <div class="doctor-obj">
                            <a href="" ><h6>Dr. Example Name</h6></a>
                            <p>Lorem ipsum dolor</div>
                            <div class="doctor-obj">
                            <a href=""><h6>Dr. Example Name</h6></a>
                            <p>Lorem ipsum dolor</div>
                        </div>
                    </div>
                </div>
            </div>
                <div id="floating-panel">
                    <h4>Added Doctors</h4>
                        <!-- <button id="drop" onclick="drop()">Drop Markers</button> -->
                    </div>
                <div id="maps">

            </div>
        </div>
    </div>

<!-- google maps api key -->
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABZr8y9YuOF9eQhxoC_P70V73zuJjFbkc&libraries=places&callback=initMap">
    </script>

</body>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\Anesu\OneDrive\UTS\Semester 1\Software Studio\E-Healthcare\SES_1A_Group_2_E-Healthcare\resources\views/doctors/index.blade.php ENDPATH**/ ?>