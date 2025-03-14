<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <!-- PLUGINS CSS STYLE -->
        <link href="<?php echo e(asset('assets/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" />
        <link href="<?php echo e(asset('assets/plugins/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" />
        <link href="<?php echo e(asset('assets/plugins/listtyicons/style.min.css')); ?>" rel="stylesheet" />
		<link href="<?php echo e(asset('assets/plugins/selectbox/select_option1.min.css')); ?>" rel="stylesheet"/>

        <!-- Login and Registration Form Title and CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/style.css')); ?>">
        <link rel="stylesheet" href="assets/style.css">

        <link href=" <?php echo e(asset('img/background1.jpg')); ?>"/>
    </head>
    <div class="header">
        
        <div class="logo">
            <a href="<?php echo e(url('/')); ?>"><h2>E-Healthcare</h2></a>
            <h4 style="color:white;">Your Online Healthcare Provider</h4>
        </div>
        <div class="navbar">
            <a href="/">Home</a>
            <a href="/appointment">Appointments</a>
            <a href="/messaging">Messaging</a>
            <div class="nav-dropdown">
                <?php if(Route::has('register')): ?>
                <button class="drop-btn">Account <i class="fa fa-caret-down"></i></button>
                <?php else: ?>
                <button class="drop-btn"><?php echo e(Auth::user()->name); ?> <img src="https://picsum.photos/70" alt="avatar"></button>
                <?php endif; ?>
                <div class="nav-dropdown-content">
                    <a href="">Account</a>
                        <?php if(auth()->guard()->guest()): ?>
                            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>

                            <?php if(Route::has('register')): ?>
                            <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>

                            <?php endif; ?>
                            <?php else: ?>
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>
                            <a class="nav-link" href="/patient-form">Patient Forms</a>

                            <div>
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Logout')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                         <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</html>
<?php /**PATH D:\Git Repo\SES_1A_Group_2_E-Healthcare\resources\views/layouts/header.blade.php ENDPATH**/ ?>