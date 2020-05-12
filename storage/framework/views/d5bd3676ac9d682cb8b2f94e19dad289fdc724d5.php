<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'Laravel')); ?>

                </a>

                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div >
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>

<?php echo $__env->make('layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                    <a href="patient-form.html">Patient Forms</a>
                    <a href="">Settings</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="user-name">
                <h3>Welcome  <?php echo e(Auth::user()->name); ?></h3></div>
            <div class="column">
                <div class="container">
                    <h3>Find Doctors</h3>
                    <div id="maps"></div>
                    <form action="">
                        <input type="text" class="maps-search" id="search" placeholder="search"/>
                    </form>
                </div>
            </div>
            <div class="column">
                <div class="container">
                    <h3>Added Doctors</h3>
                    <div class="doctor-list">
                        <div class="doctor-obj">
                        <a href="" ><h6>Dr. Exmample Name</h6></a>
                        <p>Lorem ipsum dolor, sit amet consectetur </div>
                        <div class="doctor-obj">
                        <a href="" ><h6>Dr. Exmample Name</h6></a>
                        <p>Lorem ipsum dolor, sit amet consectetur </div>
                        <div class="doctor-obj">
                        <a href=""><h6>Dr. Exmample Name</h6></a>
                        <p>Lorem ipsum dolor, sit amet consectetur </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>
function initMap() {
    var location =	{lat: -33.868820, lng: 151.209290};
    var map = new google.maps.Map(document.getElementById('maps'), {
    zoom: 12,
    center: location
    });

    var marker = new google.maps.Marker({
    position: location,
    map: map
    });
}
</script>

<?php /**PATH C:\Users\Anesu\OneDrive\UTS\Semester 1\Software Studio\E-Healthcare\SES_1A_Group_2_E-Healthcare\resources\views/layouts/app.blade.php ENDPATH**/ ?>